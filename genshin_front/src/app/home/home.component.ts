import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent {
  constructor(private http: HttpClient) { }

  articles : any;
  date = "2021-01-01";

  ngOnInit(): void {
    this.http.get<any>('http://localhost:8000/api/guides').subscribe(
      (response : any) => {
        this.articles = response;
        console.table(this.articles);
      },
      (error : any) => {
        console.log('Erreur ! : ' + error);
      }
    );
  }
}
