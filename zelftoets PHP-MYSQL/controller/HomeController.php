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
    $mensen = getPeopleById($id);
    render('home/update', array('mensen' => $mensen));
}

function edit($id){
    UpdatePeople($_POST, $id);
    index();
}


function create(){
    render("home/create");
}

function store(){
    $Voornaam = $_POST["Voornaam"];
    $Achternaam = $_POST["Achternaam"];
    $Geboortedatum = $_POST["Geboortedatum"];
    createBezoeker($Voornaam, $Achternaam, $Geboortedatum);
    index();
}