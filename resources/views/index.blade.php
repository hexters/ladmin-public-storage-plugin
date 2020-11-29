<x-ladmin-layout>
  <x-slot name="title">PublicStorage Library</x-slot>
  <h6 class="font-weight-bold mb-3">Directories</h6>
  <div class="row">
    @foreach ($directories['directories'] as $dir)
        <div class="col-md-3 mb-3" data-toggle="tooltip" data-placement="top" title="{{ $dir }}">
          <x-ladmin-card>
            {!! ladmin()->icon('folder') !!} 
            <a href="{{ route('administrator.storage.index', ['back' => request()->fullurl(), 'dir' => request()->get('dir', '') . '/' . $dir ]) }}">
              {{ Str::limit($dir, 13) }}
            </a>
          </x-ladmin-card>
        </div>
    @endforeach
  </div>

  <h6 class="font-weight-bold mb-3">Files</h6>
  <div class="row">
    @foreach ($directories['files'] as $file)
        <div class="col-md-3 mb-3" data-toggle="tooltip" data-placement="top" title="{{ $file }}">
          <x-ladmin-card>
            {!! ladmin()->icon('document') !!} 
            <a href="{{ storage()->url($file) }}" target="_blank">
              {{ Str::limit($file, 13) }}
            </a>
          </x-ladmin-card>
        </div>
    @endforeach
  </div>
  

</x-ladmin-layout>