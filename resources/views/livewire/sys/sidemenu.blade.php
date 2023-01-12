<div class="h-screen overflow-y-scroll py-4 px-4 sm:px-6 bg-gray-50 rounded dark:bg-gray-800">
    <ul class="space-y-2">
        <li>
            <a href="#"
                class="flex items-center p-2 text-base font-normal rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true"
                    class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                <svg aria-hidden="true"
                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="ml-3">Help</span>
            </a>
        </li>
    </ul>

    <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
        <li>
            <button type="button"
                class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                aria-controls="dropdown-usuarios" data-collapse-toggle="dropdown-usuarios">
                <i class="fa-light fa-user-gear"></i>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Usuarios y permisos</span>
                <i class="fa-regular fa-angle-down"></i>
            </button>
            <ul id="dropdown-usuarios" class="hidden py-2 space-y-2">
                <li>
                    <a href="{{route('sys.usuarios')}}"
                        class="flex items-center p-1 pl-11 w-full text-sm font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Usuarios</a>
                </li>
                <li>
                    <a href="{{route('sys.permisos')}}"
                        class="flex items-center p-1 pl-11 w-full text-sm font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Permisos</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="{{route('sys.catalogos')}}"
                class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg transition duration-75 hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                <i class="fa-thin fa-folder-gear fa-lg"></i>
                <span class="ml-3">Catálogos</span>
            </a>
        </li>
        <li>
            <button type="button"
                class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                aria-controls="dropdown-bitacoras" data-collapse-toggle="dropdown-bitacoras">
                <i class="fa-light fa-gears"></i>
                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Bitácoras</span>
                <i class="fa-regular fa-angle-down"></i>
            </button>
            <ul id="dropdown-bitacoras" class="hidden py-2 space-y-2">
                <li>
                    <a href="{{route('sys.logs')}}"
                        class="flex items-center p-1 pl-11 w-full text-sm font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Bitácora del sistema</a>
                </li>
                <li>
                    <a href="/sys/user-activity"
                        class="flex items-center p-1 pl-11 w-full text-sm font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Actividad de usuarios</a>
                </li>

            </ul>
        </li>
    </ul>
</div>
