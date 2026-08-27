<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AspirationController extends Controller
{
    public function index() { return "Aspiration Index"; }
    public function create() { return "Aspiration Create"; }
    public function store() { return "Aspiration Store"; }
    public function show($id) { return "Aspiration Show " . $id; }
    public function edit($id) { return "Aspiration Edit " . $id; }
    public function update($id) { return "Aspiration Update " . $id; }
    public function destroy($id) { return "Aspiration Destroy " . $id; }
}
