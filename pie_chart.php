<?php
	//载入基本类和饼图类
	require_once ('jpgraph/src/jpgraph.php');	
	require_once ('jpgraph/src/jpgraph_pie.php');	
	require_once ('jpgraph/src/jpgraph_pie3d.php');	
	//初始数据，
	$browse = array('Potato','Sweet potato','Cucumis','Tomatoes','Snow pea');
	$persent = array(58,18,16,6,2);
	//
	$graph = new PieGraph(400,300);
	//
	$graph->title->Set(iconv('utf-8', 'GB2312', '农产品市场份额一览图'));

	$graph->title->SetFont(FF_SIMSUN,FS_BOLD,18);

	$graph->title->SetColor("red");
	
	$pl = new PiePlot3D($persent);
	$pl->ExplodeSlice(1);
	$pl->SetSize(0.4);
	$pl->SetCenter(0.45,0.42);
	$pl->SetLegends($browse);
	$graph->Add($pl);
	$graph->Stroke();
	
?>