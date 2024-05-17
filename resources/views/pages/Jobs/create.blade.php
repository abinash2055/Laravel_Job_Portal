<x-layout>
  <x-slot name="heading">
    Welcome to Creating a Job
  </x-slot>

  <form method="POST" action="/jobs">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job below</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">This information will not be displayed publicly and only provide a handful of details of your own.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="title">TITLE</x-form-label>
            <div class="mt-2">
              <x-form-input name="title" id="title" placeholder="Job Title"/>
              <x-form-error name="title"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="salary">SALARY</x-form-label>
            <div class="mt-2">
              <x-form-input name="salary" id="salary" placeholder="$50,000 per month"/>
              <x-form-error name="salary"/>
            </div>
          </x-form-field>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">CANCEL</button>
      <x-form-button>SAVE</x-form-button>
    </div>
  </form>
</x-layout>
