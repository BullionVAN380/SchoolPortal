<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <h1>Print Am super Admin</h1>

                    <!-- Flex Container for Sections -->
                    <div class="flex flex-wrap -mx-2">

                        <!-- Student Management Section -->
                        <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md mb-4">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Student Management</h3>
                                <ul class="list-disc list-inside mt-2">
                                    <li><a href="{{ route('students.index') }}" class="text-blue-500">View All Students</a></li>
                                    <li><a href="/students/create" class="text-blue-500">Add New Student</a></li>
                                    <li><a href="/students/grades" class="text-blue-500">Manage Grades</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Faculty Management Section -->
                        <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md mb-4">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Faculty Management</h3>
                                <ul class="list-disc list-inside mt-2">
                                    <li><a href="/faculty" class="text-blue-500">View All Faculty</a></li>
                                    <li><a href="/faculty/create" class="text-blue-500">Add New Faculty Member</a></li>
                                    <li><a href="/faculty/schedule" class="text-blue-500">Manage Schedules</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Course Management Section -->
                        <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md mb-4">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Course Management</h3>
                                <ul class="list-disc list-inside mt-2">
                                    <li><a href="/courses" class="text-blue-500">View All Courses</a></li>
                                    <li><a href="/courses/create" class="text-blue-500">Add New Course</a></li>
                                    <li><a href="/courses/schedule" class="text-blue-500">Manage Course Schedule</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Administrative Tools Section -->
                        <div class="w-full md:w-1/2 lg:w-1/4 px-2">
                            <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md mb-4">
                                <h3 class="font-semibold text-lg text-gray-800 dark:text-gray-200">Administrative Tools</h3>
                                <ul class="list-disc list-inside mt-2">
                                    <li><a href="/reports" class="text-blue-500">Generate Reports</a></li>
                                    <li><a href="/settings" class="text-blue-500">System Settings</a></li>
                                    <li><a href="/notifications" class="text-blue-500">Manage Notifications</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
