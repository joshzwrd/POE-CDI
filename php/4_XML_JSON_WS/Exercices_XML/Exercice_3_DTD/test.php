<?php
$dom = new DOMDocument;
$dom->load('livres.xml');

if ($dom->validate()) {
echo "Ce document est valide !";

}