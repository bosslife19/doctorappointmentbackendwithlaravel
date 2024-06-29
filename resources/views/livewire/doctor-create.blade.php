<div>
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <form wire:submit="createDoctor" class="flex flex-col gap-3">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name"  autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

                <!-- Bio -->
                <div>
                    <x-input-label for="bio" :value="__('Bio/About')" />
                    <x-text-input wire:model="bio" id="bio" class="block mt-1 w-full" type="text" name="bio" autofocus autocomplete="bio" />
                    <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                </div>

                {{-- specialy --}}

                <div class="my-1">
                    <x-input-label for="bio" :value="__('Specialties')" />
                    <select wire:model="specialty_id" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        <option selected="">Choose Specialty</option>
                        @foreach ($specialties as $item)
                        <option selected value="{{$item->id}}">{{$item->specialty_name}}</option>
                        @endforeach
                        
                      </select>
                      <x-input-error :messages="$errors->get('specialty_id')" class="mt-2" />
                </div>

               

                        <!-- Hospital name -->
        <div>
            <x-input-label for="hospital_name" :value="__('Hospital Name')" />
            <x-text-input wire:model="hospital_name" id="hospital_name" class="block mt-1 w-full" type="text" name="hospital_name" autofocus autocomplete="hospital_name" />
            <x-input-error :messages="$errors->get('hospital_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="experience" :value="__('Experience')" />
            <x-text-input wire:model="experience" id="hospital_name" class="block mt-1 w-full" type="number" name="experience" autofocus autocomplete="hospital_name" />
            <x-input-error :messages="$errors->get('experience')" class="mt-2" />
        </div>

                <!-- twitter links -->
                <div>
                    <x-input-label for="twitter" :value="__('Twitter Url')" />
                    <x-text-input wire:model="twitter" id="twitter" class="block mt-1 w-full" type="text" name="twitter" autofocus autocomplete="twitter" />
                    <x-input-error :messages="$errors->get('twitter')" class="mt-2" />
                </div>

                 <!-- instagram links -->
                 <div>
                    <x-input-label for="instagram" :value="__('Instagram Url')" />
                    <x-text-input wire:model="instagram" id="instagram" class="block mt-1 w-full" type="text" name="instagram" autofocus autocomplete="instagram" />
                    <x-input-error :messages="$errors->get('instagram')" class="mt-2" />
                </div>



        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"  autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                             autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            
            <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none" href="/admin/doctors">
                {{-- <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg> --}}
                Cancel
              </a>


            <x-primary-button class="ms-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
            </div>
        </div>
    </div>
</div>
