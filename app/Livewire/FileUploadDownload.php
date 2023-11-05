<?php

namespace App\Livewire;

use App\Models\FileUploadDownload as ModelsFileUploadDownload;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileUploadDownload extends Component
{
    use WithFileUploads;

    #[Rule('required')]
    public $name;
    #[Rule('file|mimes:pdf,doc,docx|max:2048')]
    public $file;
    public $path;
    public $downloads;

    public function mount()
    {
        $this->downloads = ModelsFileUploadDownload::all();
    }

    public function render()
    {
        return view('livewire.file-upload-download');
    }

    public function save()
    {
        $this->validate();
        $this->path = $this->file->store('myfiles');

        ModelsFileUploadDownload::create([
            'name' => $this->name,
            'path' => $this->path,
        ]);

        session()->flash('status', 'File uploaded.');
        // $this->reset('name','file');
        return $this->redirect('file-upload-download', navigate: true);
    }

    public function downloadFile(ModelsFileUploadDownload $FileUploadDownload){
        if(Storage::disk('local')->exists($FileUploadDownload->path)){
            session()->flash('status', 'File downloaded.');
            return Storage::download($FileUploadDownload->path, $FileUploadDownload->name);
        }
        session()->flash('status', 'File not found.');
    }
}
