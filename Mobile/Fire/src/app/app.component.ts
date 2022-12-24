import { Component } from '@angular/core';
@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss'],
})
export class AppComponent {
  public appPages = [
    { title: 'Perfil', url: '/perfil', icon: 'person' },
    { title: 'Ajuda', url: '/ajuda', icon: 'information-circle' },
  
  ];
 
  constructor() {}
}
