import React from 'react'

const SwitcherBody = () => {
    return (
        <>
            <a href="#" className="back-to-top">
                <ion-icon name="arrow-up-outline"></ion-icon>
            </a>
            <div className="switcher-body">
                <button className="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                    <ion-icon name="color-palette-sharp" className="me-0"></ion-icon>
                </button>
                <div className="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabIndex="-1" id="offcanvasScrolling">
                    <div className="offcanvas-header border-bottom">
                        <h5 className="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                        <button type="button" className="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div className="offcanvas-body">
                        <h6 className="mb-0">Theme Variation</h6>
                        <hr />
                        <div className="form-check form-check-inline">
                            <input className="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" defaultValue="option1" defaultChecked />
                            <label className="form-check-label" htmlFor="LightTheme">Light</label>
                        </div>
                        <div className="form-check form-check-inline">
                            <input className="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" defaultValue="option2" />
                            <label className="form-check-label" htmlFor="DarkTheme">Dark</label>
                        </div>
                        <div className="form-check form-check-inline">
                            <input className="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" defaultValue="option3" />
                            <label className="form-check-label" htmlFor="SemiDark">Semi Dark</label>
                        </div>
                        <hr />
                        <h6 className="mb-0">Header Colors</h6>
                        <hr />
                        <div className="header-colors-indigators">
                            <div className="row row-cols-auto g-3">
                                <div className="col">
                                    <div className="indigator headercolor1" id="headercolor1"></div>
                                </div>
                                <div className="col">
                                    <div className="indigator headercolor2" id="headercolor2"></div>
                                </div>
                                <div className="col">
                                    <div className="indigator headercolor3" id="headercolor3"></div>
                                </div>
                                <div className="col">
                                    <div className="indigator headercolor4" id="headercolor4"></div>
                                </div>
                                <div className="col">
                                    <div className="indigator headercolor5" id="headercolor5"></div>
                                </div>
                                <div className="col">
                                    <div className="indigator headercolor6" id="headercolor6"></div>
                                </div>
                                <div className="col">
                                    <div className="indigator headercolor7" id="headercolor7"></div>
                                </div>
                                <div className="col">
                                    <div className="indigator headercolor8" id="headercolor8"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div className="overlay nav-toggle-icon"></div>
        </>
    )
}

export default SwitcherBody