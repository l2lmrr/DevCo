<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Profile Information Section -->
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl p-6 sm:p-8">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-2xl font-bold text-gray-900">Profile Information</h3>
                    <span class="text-sm text-gray-500">Manage your account details</span>
                </div>
                <div class="border-t border-gray-100 pt-6">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Section -->
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl p-6 sm:p-8">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-2xl font-bold text-gray-900">Update Password</h3>
                    <span class="text-sm text-gray-500">Secure your account</span>
                </div>
                <div class="border-t border-gray-100 pt-6">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="bg-white overflow-hidden shadow-xl rounded-2xl p-6 sm:p-8">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-2xl font-bold text-gray-900">Delete Account</h3>
                    <span class="text-sm text-gray-500">Permanently remove your account</span>
                </div>
                <div class="border-t border-gray-100 pt-6">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>