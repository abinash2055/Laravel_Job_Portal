<x-layout>
  <x-slot name="heading">
    Welcome to Log In Page
  </x-slot>

  <form method="POST" action="/login">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <x-form-field>
            <x-form-label for="email">EMAIL ADDRESS</x-form-label>
            <div class="mt-2">
              <x-form-input name="email" id="email" type="email"  placeholder="email_address" required/>
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

        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm font-semibold leading-6 text-gray-900">CANCEL</a>
      <x-form-button>LOGIN</x-form-button>
    </div>
  </form>
</x-layout>
