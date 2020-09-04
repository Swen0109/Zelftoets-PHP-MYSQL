<?php

require(ROOT . "model/functieModel.php");

function index(){
	render("home/index", array("info" => getAllPeople()));
}

function delete($id){
    render("home/delete", ["id" => $id]);
}

function destroy($id){
    deleteGegevens($id);
    index();  
}

function update($id){
    $data = getPeopleById($id);
    render('home/update', array('data' => $data));
}

function edit($id){
    UpdatePeople($_POST, $id);
    index();
}