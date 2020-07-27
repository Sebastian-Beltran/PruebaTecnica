import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UserList from './UsersList';


export default class Example extends Component {

    // state = {
    //     user: []
    // };
    constructor(props){
        super(props);
        this.state = {
            user: [],
            form: {
                first_name: '',
                last_name: '',
                document: '',
                email: '',
                addres: '',
                phone: ''

            }
        }
    }
    async componentDidMount(){
        try {
            let resp = await fetch('http://127.0.0.1:8000/users');
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
        <table className="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Documento</th>
                <th scope="col">Email</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col">Acción</th>
              </tr>
            </thead>
            <UserList
                user={this.state.user}
             />
          </table>
        
          <a href="/users/create" className="floating-btn"><i id="btn-floa" className="material-icons">add</i></a>

    </div>
            
        );
    }
    
}



if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
