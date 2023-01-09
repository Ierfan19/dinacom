import React from 'react'
import Menu from './Layouts/Menu'
import SwitcherBody from './Layouts/SwitcherBody'
import Content from './Content/Content'

const Index = ({ produk, wisata, user, tahun, user_login }) => {

    return (
        <>
            <Menu />
            <div className='wrapper'>
                <div className="page-content-wrapper">
                    <Content
                        produk={produk}
                        wisata={wisata}
                        user={user}
                        tahun={tahun}
                        user_login={user_login}
                    />
                </div>
            </div>
            <SwitcherBody />
        </>
    )
}

export default Index