require('./bootstrap');
import React from 'react'
import { render } from 'react-dom'
import { createInertiaApp } from '@inertiajs/inertia-react'
import 'bootstrap/dist/css/bootstrap.min.css'

createInertiaApp({
    resolve: name => require(`./components/${name}`),
    setup({ el, App, props }) {
        render(<App {...props} />, el)
    },
})