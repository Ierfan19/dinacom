import React from 'react';
import Main from './main-content/main'


const Index = ({ wisata, galleries }) => {
    return (
        <>
            <Main wisata={wisata} galleries={galleries} />
        </>
    );
}

export default Index;


