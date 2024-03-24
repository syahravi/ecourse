@extends('layouts.backend.app', ['title' => 'Exam Scores'])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Exam Scores</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course</th>
                                    <th>User</th>
                                    <th>Score</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($examScores as $examScore)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $examScore->course->name }}</td>
                                        <td>{{ $examScore->user->name }}</td>
                                        <td>{{ $examScore->score }}</td>
                                        <td>
                                            <a href="{{ route('admin.sertifikat.show', ['exam_score'=> $examScore->id]) }}" class="btn btn-primary">Lihat Sertifikat</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
