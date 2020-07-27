import React, { Component } from 'react';
import ReactDOM from 'react-dom';

const UserList = ({user}) => (

    <tbody>
        {user.map((user)=>(

        <tr key={user.id}>
            <th>{user.id}</th>
           <td>
            <a href={'/usersshow/' +  user.id}>
                {user.first_name}
            </a>
           </td> 
           <td>{user.last_name}</td> 
           <td>{user.document}</td> 
           <td>{user.email}</td> 
           <td>{user.addres}</td> 
           <td>{user.phone}</td> 

           <td>
                <div className="row justify-content-around">
                    <div className="col-2">
                        <a href={"/users/"+ user.id + "/edit"}>
                            <button type="button" className="btn btn-success">Editar</button>
                        </a>
                    </div>
                    <div className="col-5">

                    </div>
                    <div className="col-2">
                        <button type="submit" className="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </td>

        </tr>
        ))}
    </tbody>
)
export default UserList;

