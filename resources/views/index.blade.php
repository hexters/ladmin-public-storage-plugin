<x-ladmin-layout>
  <x-slot name="title">
    <span title="{{ 'Storage' . request()->get('dir', '/') }}">
      /{{ Str::limit( 'Storage' . request()->get('dir', '/'), 30 ) }}
    </span>
  </x-slot>
  <h6 class="font-weight-bold">
    Directories ({{ number_format(count($directories['directories']), 0) }})
  </h6>
  <div class="row">
    @forelse ($directories['directories'] as $dir)
        <div class="col-md-3 mb-3" data-toggle="tooltip" data-placement="top" title="{{ $dir }}">
          <a class="text-dark text-decoration-none" href="{{ route('administrator.storage.index', ['back' => request()->fullurl(), 'dir' => request()->get('dir', '') . '/' . $dir ]) }}">
            <x-ladmin-card>
              {!! ladmin()->icon('folder') !!} 
              {{ Str::limit($dir, 13) }}
            </x-ladmin-card>
          </a>
        </div>
    @empty 
    <div class="col-12 mb-3">
      <div class="p-3 bg-light">
        <p class="m-0">Directory not available</p>
      </div>
    </div>
    @endforelse
  </div>

  <h6 class="font-weight-bold mb-3">Files ({{ number_format(count($directories['files']), 0) }})</h6>
  <div class="row">
    @forelse ($directories['files'] as $file)
        <div class="col-md-3 mb-3" data-toggle="tooltip" data-placement="top" title="{{ $file }}">
          <a class="text-dark text-decoration-none" href="{{ storage()->url($file) }}" target="_blank">
            <x-ladmin-card>
              {!! ladmin()->icon('document') !!} 
              {{ Str::limit($file, 13) }}
            </x-ladmin-card>
          </a>
        </div>
    @empty 
      <div class="col-12 mb-3">
        <div class="p-3 bg-light">
          <p class="m-0">File not available</p>
        </div>
      </div>
    @endforelse
  </div>
  

</x-ladmin-layout>