<x-layout>
  <x-slot name="heading">
    Welcome to Registration Page
  </x-slot>

  <form method="POST" action="/register">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="first_name">FIRST NAME</x-form-label>
            <div class="mt-2">
              <x-form-input name="first_name" id="first_name" type="name"/>
              <x-form-error name="first_name" required/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="last_name">LAST NAME</x-form-label>
            <div class="mt-2">
              <x-form-input name="last_name" id="last_name" type="name" placeholder="Family Name" required/>
              <x-form-error name="last_name"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="email">EMAIL ADDRESS</x-form-label>
            <div class="mt-2">
              <x-form-input name="email" id="email" type="email" placeholder="email_address" required/>
              <x-form-error name="email"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password">PASSWORD</x-form-label>
            <div class="mt-2">
              <x-form-input name="password" id="password" type="password" placeholder="password" required/>
              <x-form-error name="email"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password_confirmation">CONFIRM PASSWORD</x-form-label>
            <div class="mt-2">
              <x-form-input name="password_confirmation" id="password_confirmation" type="password" placeholder="Rewrite password" required/>
              <x-form-error name="password_confirmation"/>
            </div>
          </x-form-field>

        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm font-semibold leading-6 text-gray-900">CANCEL</a>
      <x-form-button>REGISTER</x-form-button>
    </div>
  </form>
</x-layout>
