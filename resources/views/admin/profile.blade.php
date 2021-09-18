<x-admin.base>
  <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
      @livewire('profile.update-profile-information-form')

      <x-jet-section-border />
    @endif
  </div>
</x-admin.base>
