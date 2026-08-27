<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() { return "Program Index"; }
    public function create() { return "Program Create"; }
    public function store() { return "Program Store"; }
    public function show($id) { return "Program Show " . $id; }
    public function edit($id) { return "Program Edit " . $id; }
    public function update($id) { return "Program Update " . $id; }
    public function destroy($id) { return "Program Destroy " . $id; }
}
