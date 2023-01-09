import React from 'react'
import { Card } from 'react-bootstrap'
import logo2 from '../../../../../../public/dashboard/assets/images/logo-icon-2.png'
import { Link } from '@inertiajs/inertia-react'

const Menu = () => {
    return (
        <>
            <aside className="sidebar-wrapper" data-simplebar="true">
                <div className="sidebar-header">
                    <div>
                        <Card.Img src={logo2} className="logo-icon" alt="logo icon" />
                    </div>
                    <div>
                        <h4 className="logo-text">SYN-UI</h4>
                    </div>
                    <div className="toggle-icon ms-auto">
                        <ion-icon name="menu-sharp"></ion-icon>
                    </div>
                </div>
                <ul className="metismenu" id="menu">

                    <li>
                        <Link href='/admin'>
                            <ion-icon name="ellipse-outline"></ion-icon>Dashboard
                        </Link>
                    </li>
                    <li>
                        <Link href="/admin/wisata">
                            <ion-icon name="ellipse-outline"></ion-icon>Wisata
                        </Link>
                    </li>
                    <li>
                        <Link href="/admin/produk">
                            <ion-icon name="ellipse-outline"></ion-icon>Produk
                        </Link>
                    </li>
                    <li>
                        <Link href="/admin/galery">
                            <ion-icon name="ellipse-outline"></ion-icon>Galery
                        </Link>
                    </li>
                </ul>
            </aside>
            <header className="top-header">
                <nav className="navbar navbar-expand gap-3">
                    <div className="mobile-menu-button">
                        <ion-icon name="menu-sharp"></ion-icon>
                    </div>
                    {/* <form className="searchbar">
            <div className="position-absolute top-50 translate-middle-y search-icon ms-3">
                <ion-icon name="search-sharp"></ion-icon>
            </div>
            <input className="form-control" type="text" placeholder="Search for anything">
            <div className="position-absolute top-50 translate-middle-y search-close-icon">
                <ion-icon name="close-sharp"></ion-icon>
            </div>
        </form> */}
                    <div className="top-navbar-right ms-auto">

                        <ul className="navbar-nav align-items-center">
                            {/*  <li className="nav-item mobile-search-button">
                    <a className="nav-link" href="#">
                        <div className="">
                            <ion-icon name="search-sharp"></ion-icon>
                        </div>
                    </a>
                </li>  */}
                            <li className="nav-item">
                                <a className="nav-link dark-mode-icon" href="#">
                                    <div className="mode-icon">
                                        <ion-icon name="moon-sharp"></ion-icon>
                                    </div>
                                </a>
                            </li>
                            <li className="nav-item dropdown dropdown-large dropdown-apps">

                            </li>
                            <li className="nav-item dropdown dropdown-large">

                            </li>
                            <li className="nav-item dropdown dropdown-user-setting">
                                <div className="d-flex align-items-center">
                                    <div className="">
                                        <ion-icon name="log-out-outline"></ion-icon>
                                    </div>
                                    {/* <div className="ms-3"><span><a className="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" className="d-none">
                                    @csrf
                                </form>
                            </span>
                            </div> */}
                                </div>
                            </li>

                        </ul>

                    </div>
                </nav>
            </header>
        </>
    )
}

export default Menu