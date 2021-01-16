<?php 
function view($component){
include_once('components/'.$component.'.php');
}
function section($section){
include('components/sections/'.$section.'.php');
}
function part($part){
include('components/sections/parts/'.$part.'.php');
}
?>