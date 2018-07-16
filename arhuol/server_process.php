<?php

	require 'conexion.php';
	
	/* Nombre de La Tabla */
	$sTabla = "conductores";
	
	/* Array que contiene los nombres de las columnas de la tabla*/
	$aColumnas = array('plus','cont', 'fecha', 'dni', 'nombre', 'apellido', 'placa', 'ant_penales', 'ant_judicial', 'ant_policial', 'record_cond',  'resultado','soat', 'observacion', 'pdf');
	
	/* columna indexada */
	$sIndexColumn = "dni";
	
	// Paginacion
	$sLimit = "";
	if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
	{
		$sLimit = "LIMIT ".$_GET['iDisplayStart'].", ".$_GET['iDisplayLength'];
	}
	
	
	//Ordenacion
	if ( isset( $_GET['iSortCol_0'] ) )
	{
		$sOrder = "ORDER BY  ";
		for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
		{
			if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
			{
				$sOrder .= $aColumnas[ intval( $_GET['iSortCol_'.$i] ) ]."
				".$_GET['sSortDir_'.$i] .", ";
			}
		}
		
		$sOrder = substr_replace( $sOrder, "", -2 );
		if ( $sOrder == "ORDER BY" )
		{
			$sOrder = "";
		}
	}
	
	//Filtracion
	$sWhere = "";
	if ( $_GET['sSearch'] != "" )
	{
		$sWhere = "WHERE (";
		for ( $i=0 ; $i<count($aColumnas) ; $i++ )
		{
			$sWhere .= $aColumnas[$i]." LIKE '%".$_GET['sSearch']."%' OR ";
		}
		$sWhere = substr_replace( $sWhere, "", -3 );
		$sWhere .= ')';
	}
	
	// Filtrado de columna individual 
	for ( $i=0 ; $i<count($aColumnas) ; $i++ )
	{
		if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
		{
			if ( $sWhere == "" )
			{
				$sWhere = "WHERE ";
			}
			else
			{
				$sWhere .= " AND ";
			}
			$sWhere .= $aColumnas[$i]." LIKE '%".$_GET['sSearch_'.$i]."%' ";
		}
	}
	
	
	//Obtener datos para mostrar SQL queries
	$sQuery = "
	SELECT SQL_CALC_FOUND_ROWS ".str_replace(" , ", " ", implode(", ", $aColumnas))."
	FROM   $sTabla
	$sWhere
	$sOrder
	$sLimit
	";
	$rResult = $mysqli->query($sQuery);
	
	/* Data set length after filtering */
	$sQuery = "
	SELECT FOUND_ROWS()
	";
	$rResultFilterTotal = $mysqli->query($sQuery);
	$aResultFilterTotal = $rResultFilterTotal->fetch_array();
	$iFilteredTotal = $aResultFilterTotal[0];
	
	/* Total data set length */
	$sQuery = "
	SELECT COUNT(".$sIndexColumn.")
	FROM   $sTabla
	";
	$rResultTotal = $mysqli->query($sQuery);
	$aResultTotal = $rResultTotal->fetch_array();
	$iTotal = $aResultTotal[0];
	
	/*
		* Output
	*/
	$output = array(
	"sEcho" => intval($_GET['sEcho']),
	"iTotalRecords" => $iTotal,
	"iTotalDisplayRecords" => $iFilteredTotal,
	"aaData" => array()
	);
	
	while ( $aRow = $rResult->fetch_array())
	{
		$row = array();
		for ( $i=0 ; $i<count($aColumnas) ; $i++ )
		{
			if ( $aColumnas[$i] == "version" )
			{
				/* Special output formatting for 'version' column */
				$row[] = ($aRow[ $aColumnas[$i] ]=="0") ? '-' : $aRow[ $aColumnas[$i] ];
			}
			else if ( $aColumnas[$i] != ' ' )
			{
				/* General output */
				$row[] = $aRow[ $aColumnas[$i] ];
			}
		}

		if ($aRow['pdf'] == @num_rows > 0){ 
			$row['pdf'] =  '<td><a href="modif_load.php?dni='.$aRow['dni'].'" target="_blank"><img src="img/sist/load.png"></td>';
			}else{
			$row['pdf'] =  '<td><a href="docs/'.$aRow['pdf'].'" target="_blank"><img src="img/sist/pdf.png"></td>';
			}
		/*$row[] = "<td><a href='modificar.php?id=".$aRow['cont']."'><span class='glyphicon glyphicon-pencil'></span></a></td>";
		$row[] = "<td><a href='#' data-href='eliminar.php?id=".$aRow['cont']."' data-toggle='modal' data-target='#confirm-delete'><span class='glyphicon glyphicon-trash'></span></a></td>";*/
		
		$row[] = "<td><a href='modificar.php?id=".$aRow['cont']."'><button type='button' class='btn btn-outline-primary'><i class='fa fa-pencil'></i></button>";

		
		$row[] = "<td><a href='#' data-href='eliminar.php?id=".$aRow['cont']."' data-toggle='modal' data-target='#confirm-delete'><button type='button' class='btn btn-outline-danger'><i class='fa fa-trash-o'></i></button></a></td>";
		
		$output['aaData'][] = $row;
	}
	
	echo json_encode( $output );
?>