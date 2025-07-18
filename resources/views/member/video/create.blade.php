@extends('layouts.backend.app', ['title' => 'Episode'])

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <form action="{{ route('member.video.store', $course->slug) }}" method="POST">
                @csrf
                <x-card-form title="CREATE NEW EPISODE" :url="route('member.video.index', $course->id)" titleBtn="Create Episode">
                    <x-input title="Title" name="name" type="text" placeholder="Enter episode title" :value="old('name')" />
                    <div class="row">
                        <div class="col-6">
                            <x-input title="Episode" name="episode" type="text" placeholder="Enter video episode"
                                :value="old('episode')" />
                        </div>
                        <div class="col-6">
                            <x-input title="Video Code" name="video_code" type="text" placeholder="Enter video code"
                                :value="old('video_code')" />
                        </div>
                        <div class="col-12">
                            <x-textarea title="Teori Materi" id="teori" name="teori" type="text" placeholder="Enter Teori Materi"
                                :value="old('teori')"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="duration">Type</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="intro" value="0" checked>
                            <label class="form-check-label">Free</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="intro" value="1">
                            <label class="form-check-label">Premium</label>
                        </div>
                    </div>
                </x-card-form>
            </form>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#teori'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection


