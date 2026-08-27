<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationLogController extends Controller
{
    public function index() { return "EvaluationLog Index"; }
    public function create() { return "EvaluationLog Create"; }
    public function store() { return "EvaluationLog Store"; }
    public function show($id) { return "EvaluationLog Show " . $id; }
    public function edit($id) { return "EvaluationLog Edit " . $id; }
    public function update($id) { return "EvaluationLog Update " . $id; }
    public function destroy($id) { return "EvaluationLog Destroy " . $id; }
}
