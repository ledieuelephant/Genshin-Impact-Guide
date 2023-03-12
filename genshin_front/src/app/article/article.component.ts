import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-article',
  templateUrl: './article.component.html',
  styleUrls: ['./article.component.scss']
})

export class ArticleComponent {
  // Use input
  @Input() title: string = "";
  @Input() date: string = "";
  @Input() author: string = "";
  @Input() image: string = "";
  @Input() id: any;
}
