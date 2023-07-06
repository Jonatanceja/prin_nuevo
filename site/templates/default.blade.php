@extends('layouts.default')
@section('content')

<div class="container mx-auto my-40">
<h1 class="text-2xl font-bold mb-12">{{ $page->title()->html() }}</h1>
<p><?= $page->text()->kti() ?></p>
</div>

@endsection
