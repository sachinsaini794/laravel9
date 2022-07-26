
<x-layout title="Get free images">

    <div class="container-fluid mt-4">
        @if($message = session('message'))
            <x-alert type="success" dismissible>
                {{ $component->icon() }}
                {{ $message }}
            </x-alert>
        @endif
        <div class="row" data-masonry='{"percentPosition": true }'>
            @foreach($images as $key => $image)
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <a href="{{ $image->permalink() }}">
                            <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" class="card-img-top" />
                        </a>
                        <div class="photo-buttons">
                            <a href="{{ $image->route('edit') }}" class="btn btn-sm btn-info me-2">Edit</a>
                            <x-form action="{{ $image->route('destroy') }}" method="DELETE" style="display: inline">
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                            </x-form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $images->links() }}
        {{-- <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav> --}}
    </div>

    
        
  
</x-layout>
