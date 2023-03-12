import { ActivatedRoute } from '@angular/router';
import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-article-page',
  templateUrl: './article-page.component.html',
  styleUrls: ['./article-page.component.scss']
})
export class ArticlePageComponent {
  constructor(private http: HttpClient, private route : ActivatedRoute) {}

  pageData : any;
  dataLoaded : boolean = false;
  image : string = "";

  ngOnInit() {
    this.http.get('http://localhost:8000/api/guide/' + this.route.snapshot.paramMap.get("id") ).subscribe(data => {
      console.log(data);
      this.pageData = data;
      this.dataLoaded = true;
      this.image = "http://localhost:8000/images/" + this.pageData.image;
    });
  }
}
