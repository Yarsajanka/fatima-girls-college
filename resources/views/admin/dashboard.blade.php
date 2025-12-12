<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium mb-4">Admin Panel Sections</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <a href="{{ route('admin.announcements.index') }}" class="block p-4 bg-blue-100 hover:bg-blue-200 rounded-lg">
                            <h4 class="font-semibold">Announcements</h4>
                            <p>Manage latest announcements</p>
                        </a>
                        <a href="{{ route('admin.gallery.index') }}" class="block p-4 bg-green-100 hover:bg-green-200 rounded-lg">
                            <h4 class="font-semibold">Gallery</h4>
                            <p>Upload and manage gallery images</p>
                        </a>
                        <a href="{{ route('admin.about.index') }}" class="block p-4 bg-yellow-100 hover:bg-yellow-200 rounded-lg">
                            <h4 class="font-semibold">About Us</h4>
                            <p>Edit vision, mission, history, principal's message</p>
                        </a>
                        <a href="{{ route('admin.admissions.index') }}" class="block p-4 bg-purple-100 hover:bg-purple-200 rounded-lg">
                            <h4 class="font-semibold">Admissions</h4>
                            <p>Manage admission content</p>
                        </a>
                        <a href="{{ route('admin.applications.index') }}" class="block p-4 bg-red-100 hover:bg-red-200 rounded-lg">
                            <h4 class="font-semibold">Applications</h4>
                            <p>Review and approve applications</p>
                        </a>
                        <a href="{{ route('admin.contact.index') }}" class="block p-4 bg-indigo-100 hover:bg-indigo-200 rounded-lg">
                            <h4 class="font-semibold">Contact</h4>
                            <p>Edit contact details</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
