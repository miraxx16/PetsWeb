<?php

class CustomFunction{
	function __construct(){

	}
	//list all the type of pets in the selector in html.
	function pet_type($con){
		$output = '';
		$sql = mysqli_query($con, "SELECT * from pets") or die(mysqli_error($con));
		while($row_pet = mysqli_fetch_array($sql)){
			$output .= '<option value="'.$row_pet["petID"].'">'.$row_pet["animal_type"].'</option>';  
		}
		return $output;
	}
}