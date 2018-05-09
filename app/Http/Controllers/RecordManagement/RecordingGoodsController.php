<?php

namespace App\Http\Controllers\RecordManagement;

use App\Http\Controllers\Controller;

class RecordingGoodsController extends Controller
{
	public function showRecordingGoodsList () {
		return view('adminLTE.record_management.recordingGoodsList');
	}
}