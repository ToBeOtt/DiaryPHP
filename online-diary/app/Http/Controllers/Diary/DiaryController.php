<?php

namespace App\Http\Controllers\Diary;

use App\Http\Controllers\Controller;
use App\Models\DiaryMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class DiaryController extends Controller
{
    public function index()
    {
        Log::info('Fetching all messages');

        $diaryMessages = DiaryMessage::where('is_deleted', false)
            ->orderBy('date_created', 'desc')
            ->get();

        return view('index', ['diaryMessages' => $diaryMessages]);
    }

    public function GenerateDiaryMessage()
    {
        Log::info('Redirecting to add-page');
        return view('diary.add-diary');
    }

    public function addDiaryMessage(Request $request)
    {
        Log::info('Add diary initiated');

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
        ]);
        // Create a new DiaryMessage instance
        $diaryMessage = new DiaryMessage();

        $diaryMessage->title = $validatedData['title'];
        $diaryMessage->text = $validatedData['text'];
        $diaryMessage->date_created = Carbon::now();
        $diaryMessage->is_deleted = false;

        $diaryMessage->save();

        return redirect()->route('diary.index')->with('success', 'Diary message added successfully');
    }

    public function editDiaryMessage(DiaryMessage $diary)
    {
        Log::info('Redirecting to edit-page');
        return view('diary.edit-diary', compact('diary'));
    }

    public function updateDiaryMessage(Request $request, $id)
    {
        Log::info('Update initiated');
        $diaryMessage = DiaryMessage::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'text' => 'required|string',
        ]);
        $diaryMessage->date_edited = Carbon::now();

        $diaryMessage->update($validatedData);
        return redirect()->route('diary.index')->with('success', 'Diary message updated successfully');
    }

    public function deleteDiaryMessage($id)
    {
        Log::info('Delete is initiated');
        $diaryMessage = DiaryMessage::findOrFail($id);
        $diaryMessage->is_deleted = true;
        $diaryMessage->save();

        return redirect()->route('diary.index')->with('success', 'Diary message deleted successfully');
    }
}
