<!-- Table Section -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto relative bottom-[15px]">
  @if (session()->has('message'))
  <div class="mt-2 bg-teal-500 text-sm text-white rounded-lg p-4" role="alert">
    <span class="font-bold block">Success</span>{{session('message')}}.
  </div>
  
  @endif
    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
              <div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                  Specialties
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                  Registered Specialties
                </p>
              </div>
  
              <div>
                <div class="inline-flex gap-x-2">
                 
  
                  <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="/admin/create/specialty">
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                    Create
                  </a>
                </div>
              </div>
            </div>
            <!-- End Header -->
  
            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
              <thead class="bg-gray-50 divide-y divide-gray-200 dark:bg-neutral-800 dark:divide-neutral-700">
                <tr>
                  <th scope="col" class="px-6 py-3 text-start border-s border-gray-200 dark:border-neutral-700">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      S/N
                    </span>
                  </th>
  
                  <th scope="col" class="px-6 py-3 text-start">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Specialty Name
                    </span>
                  </th>

                  <th scope="col" colspan="2" class="px-6 py-3 text-start">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                      Actions
                    </span>
                  </th>
  
                 
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              
              @if (count($specialties) > 0)
                  @foreach ($specialties as $specialty)
                  <tr>
                    <td class="h-px w-auto whitespace-nowrap">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">{{$loop->iteration}}</span>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                      <div class="px-6 py-2">
                        <span class="font-semibold text-sm text-gray-800 dark:text-neutral-200">{{$specialty->specialty_name}}</span>
                        
                      </div>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                      <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-800 disabled:opacity-50 disabled:pointer-events-none" href="/edit/specialty/{{$specialty->id}}">
                        {{-- <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> --}}
                        Edit
                      </a>
                    </td>
                    <td class="h-px w-auto whitespace-nowrap">
                      <button wire:confirm.prevent='Are you sure?' wire:click="delete({{$specialty->id}})" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                        {{-- <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> --}}
                        Delete
                      </button>
                    </td>
                    
                  </tr>
                  @endforeach
              @else
                  <tr>
                    <td colspan="4">No data found</td>
                  </tr>
              @endif
             
               
  
               
  
              
  
                

              </tbody>
            </table>
            <!-- End Table -->
  
           
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Table Section -->
