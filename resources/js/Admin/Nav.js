import React from "react";
import { BrowserRouter as Router, Route, Link, Switch, Redirect } from 'react-router-dom';
import Home from './components/Pages/Home';

class Nav extends React.Component{
    render(){
        return(
            <Router>
                <div className="w-full">
                    <div className="flex items-center justify-between flex-wrap p-2">
                        <div className="w-full block flex-grow flex items-center w-auto">
                            <Link to="/home">Dashboard</Link>
                        </div>
                    </div>
                    <div className="flex justify-center text-white">
                        <Route exact path="/home" component={Home}/>
                    </div>                   
                </div>
            </Router>
        )
    }
}

export default Nav;