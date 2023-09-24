<nav class="bg-gray-800 shadow-xl h-screen w-64 fixed left-0 top-0 flex-none flex flex-col">
    <div class="flex-none mt-12">
        <ul class="flex flex-col w-full">
            <li class="border-t border-white">
                <a href="dashboard.php" class="flex items-center px-4 py-2 bg-gray-900 hover:bg-gray-700">
                    <i class="fas fa-tachometer-alt mr-2"></i>
                    <span class="text-white">Dashboard</span>
                </a>
            </li>
            <li class="border-t border-white">
                <a href="#" class="flex items-center px-4 py-2 bg-gray-900 hover:bg-gray-700" onclick="toggleMenu()">
                    <i class="fas fa-cash mr-2"></i>
                    <span class="text-white">SLIK PT</span>
                    <i class="fas fa-angle-down ml-auto"></i>
                </a>
                <ul id="menuSLIK" class="bg-gray-800 border-t border-white" style="display:none;">
                    <li>
                        <a href="inputslikperusahaan.php"
                            class="flex items-center px-4 py-2 hover:bg-gray-700">
                            <i class="far fa-circle mr-2"></i>
                            <span class="text-white">Input SLIK PT</span>
                        </a>
                    </li>
                    <li>
                        <a href="preview.php" class="flex items-center px-4 py-2 hover:bg-gray-700">
                            <i class="far fa-circle mr-2"></i>
                            <span class="text-white">Preview</span>
                        </a>
                    </li>
                    </ul>
            </li>
            <li class="border-t border-white">
                <a href="user_management.php" class="flex items-center px-4 py-2 hover:bg-gray-700">
                    <i class="far fa-circle mr-2"></i>
                    <span class="text-white">User Management</span>
                </a>
            </li>
            <li class="border-t border-white">
                <a href="logout.php" class="flex items-center px-4 py-2 hover:bg-gray-700">
                    <i class="far fa-circle mr-2"></i>
                    <span class="text-white">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    function toggleMenu() {
        var x = document.getElementById("menuSLIK");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>