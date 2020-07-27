import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UserShow from './UserShow';

export default class Example extends Component {

    // state = {
    //     user: []
    // };
    constructor(props){
        super(props);
        this.state = {
            user: [],
        }
        
        
    }
    async componentDidMount(){
        try {

            let resp = await fetch('http://127.0.0.1:8000/users/4');
            let data = await resp.json()
            this.setState({
                user: data
            })
            // console.log(data.user)
            console.log(data)
        } catch (error) {
            
        }
    }
    render() {
        return (
        <div className="container">
           <h2> {this.state.user.id} - {this.state.user.first_name}</h2>
           <div className="container">
          
          <div className="card">
            <div className="card-body">
                <h3 className="card-title">Informacion del usuario</h3>
                <h5><b>Nombre:</b> {this.state.user.first_name}</h5>
                <h5><b>Apellido:</b> {this.state.user.last_name}</h5>
                <h5><b>Número de documento:</b> {this.state.user.document}</h5>
                <h5><b>Email:</b> {this.state.user.email}</h5>
                <h5><b>Dirección:</b> {this.state.user.addres}</h5>
                <h5><b>Telefono:</b> {this.state.user.phone}</h5>
              </div>
            </div>
          </div>
        </div>
            
        );
    }
    
}

if (document.getElementById('user')) {
    ReactDOM.render(<UserShow />, document.getElementById('user'));
}