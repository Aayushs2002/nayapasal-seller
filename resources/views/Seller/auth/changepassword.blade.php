@extends('Seller.layouts.master')
@section('body')
@include('message.index')

<form method="POST" action="{{ route('seller.changepassword') }}">
    @csrf
    <div class="mb-4">
        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">Current Password</label>
        <input id="current_password" type="password" name="current_password" required autocomplete="current-password" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:border-purple-500">
    </div>
    <div class="mb-4">
        <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
        <input id="new_password" type="password" name="new_password" required autocomplete="new-password" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:border-purple-500">
    </div>
    <div class="mb-4">
        <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm New Password</label>
        <input id="new_password_confirmation" type="password" name="new_password_confirmation" required autocomplete="new-password" class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:border-purple-500">
    </div>
    <button type="submit" class="bg-primary hover:bg-white hover:text-primary border-primary border text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
        Change Password
    </button>
</form>

@endsection
