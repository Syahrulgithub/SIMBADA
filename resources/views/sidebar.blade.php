<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-50 bg-secondary fixed top-16 left-0 h-full text-white px-4 py-6">
            
            <!-- Bagian Admin -->
            <div class="flex items-center space-x-3 mb-6">
                <img src="/img/admin.png" alt="Admin Icon" class="w-10 h-10 rounded-full border-2 border-white">
                <h2 class="text-lg font-semibold">Admin</h2>
            </div>

            <!-- Menu Navigasi -->
            <nav class="flex flex-col space-y-2">
                <a href="{x-checkbox}" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded">
                    <img src="/img/dashboard.png" class="h-4 w-5">
                    <span class="ml-2">Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded">
                    <img src="/img/manajemen.png" class="h-5 w-5">
                    <span class="ml-2">Manajemen Barang</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded">
                    <img src="/img/user.png" class="h-5 w-5">
                    <span class="ml-2">User</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-700 rounded">
                    <img src="/img/statistik.png" class="h-5 w-5">
                    <span class="ml-2">Statistik</span>
                </a>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
