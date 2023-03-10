import { useState } from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link, Head} from '@inertiajs/react';

export default function GlosarioLayout({ auth, header, children }) {
    const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);
    
    return (
        <div className="max-h-screen bg-gray-200 overflow-hidden">
            

            <nav className="bg-blue-500 border-b border-blue-400">
                <div className="px-2 sm:px-4 lg:px-8 w-full">
                    <div className="flex  h-16  justify-between items-center">
                        <div className="flex">
                            <div className="shrink-0 flex items-center">
                                <Link href="/" className='flex items-center'>
                                    <ApplicationLogo className="block h-9 w-auto fill-current text-gray-100" />
                                    <h1 className='p-3 text-base sm:text-2xl font-mono font-medium text-gray-100'>Seguridad de la Información</h1>
                                </Link>
                                
                            </div>
                        </div>

                        {/* Dropdown menu  */}
                        <div className={(auth.user ? "hidden sm:flex": "hidden")+" sm:items-center sm:ml-6"}>
                            <div className=''>
                                <Link
                                    href={route('article.create')}
                                    className="ml-4 text-lg text-gray-200 underline"
                                >
                                    Nuevo concepto
                                </Link>
                            </div>
                            <div className="ml-3 relative">
                                <Dropdown>
                                    <Dropdown.Trigger>
                                        <span className="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                className="inline-flex items-center px-3 py-2 border border-transparent text-sm sm:text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                    {auth.user && auth.user.name}
                                                 
                                                <svg
                                                    className="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fillRule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clipRule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </Dropdown.Trigger>
        
                                    <Dropdown.Content>
                                        <Dropdown.Link href={route('profile.edit')}>Profile</Dropdown.Link>
                                        <Dropdown.Link href={route('logout')} method="post" as="button">
                                            Log Out
                                        </Dropdown.Link>
                                    </Dropdown.Content>
                                </Dropdown>
                            </div>
                        </div>  
                        
                        
                        {/* Login and register buttons */}
                        <div className={(auth.user ? 'hidden' : 'block')}>
                            <Link href={route('login')} className="text-lg text-gray-100 dark:text-gray-100 underline">
                                Iniciar sesión
                            </Link>

                            <Link
                                href={route('register')}
                                className="ml-4 text-lg text-gray-100 dark:text-gray-100 underline"
                            >
                                Registrarse
                            </Link>
                        </div>
                        
                        
                        {/* Dropdown menu base */}
                        <div className={(auth.user ? 'block sm:hidden': 'hidden') + ' -mr-2  items-center'}>
                            <button
                                onClick={() => setShowingNavigationDropdown((previousState) => !previousState)}
                                className="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg className="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        className={!showingNavigationDropdown ? 'inline-flex' : 'hidden'}
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        className={showingNavigationDropdown ? 'inline-flex' : 'hidden'}
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                        strokeWidth="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                

                {/* Menu responsive abierto */}
                <div className={(showingNavigationDropdown ? 'block' : 'hidden') + ' sm:hidden'}>
                    <div className="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink href={route('dashboard')} active={route().current('dashboard')}>
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <div className="pt-4 pb-1 border-t border-gray-200">
                        <div className="px-4">
                            <div className="font-medium text-base text-gray-800">
                                {/* {auth.user ? 'Nombre de usuario' : 'No estás logeado'} */}
                            </div>
                            {/* <div className="font-medium text-sm text-gray-500">{auth.user.email}</div> */}
                        </div>

                        <div className="mt-3 space-y-1">
                            <ResponsiveNavLink href={route('profile.edit')}>Profile</ResponsiveNavLink>
                            <ResponsiveNavLink method="post" href={route('logout')} as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <main>{children}</main>
        </div>
    );
}