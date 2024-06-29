<div>
    @if (session()->has('message'))
    <div class="mt-2 bg-teal-500 text-sm text-white rounded-lg p-4" role="alert">
      <span class="font-bold block">Success</span>{{session('message')}}.
    </div>
    
    @endif
    <div class="py-12 bg-white">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <form wire:submit="update" class="flex flex-col gap-3">
        <!-- Name -->
        <div>
            
            <x-input-label for="name" :value="__('Specialty Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

               

               

                       
       





        

        


        <div class="flex items-center justify-end mt-4">
            
            <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none" href="/admin/specialties">
                {{-- <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> --}}
                Cancel
              </a>


            <x-primary-button class="ms-4">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
            </div>
        </div>
    </div>
</div>
