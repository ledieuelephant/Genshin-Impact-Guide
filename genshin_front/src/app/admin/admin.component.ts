import { FormArray, FormBuilder, FormGroup } from '@angular/forms';

import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-admin',
  templateUrl: './admin.component.html',
  styleUrls: ['./admin.component.scss']
})
export class AdminComponent {
  myForm : FormGroup;
  selectedFile: File | undefined;
  constructor(private fb: FormBuilder, private http: HttpClient) {
    this.myForm = this.fb.group({
      Titre: [''],
      Description: [''],
      HowToPlay: this.fb.array([
        this.fb.group({
          text: '',
        })
      ]),
      Team : this.fb.array([
        this.fb.group({
          text: '',
        })
      ]),
      Artifact : this.fb.array([
        this.fb.group({
          text: '',
        })
      ]),
    })
  }
  
  get HowToPlayInput() {
    return this.myForm.get('HowToPlay') as FormArray;
  }

  get TeamInput() {
    return this.myForm.get('Team') as FormArray;
  }

  get ArtifactInput() {
    return this.myForm.get('Artifact') as FormArray;
  }

  addHowToPlay() {
    this.HowToPlayInput.push(this.fb.group({text: ''}));
    console.log(this.myForm.value)
  }

  addTeam() {
    this.TeamInput.push(this.fb.group({text: ''}));
    console.log(this.myForm.value)
  }

  addArtifact() {
    this.ArtifactInput.push(this.fb.group({text: ''}));
    console.log(this.myForm.value)
  }
  
  onSubmit() {
    if (this.selectedFile != undefined){
      var formData = new FormData();
      formData.append('image', this.selectedFile);
      formData.append('data', JSON.stringify(this.myForm.value));
      // Send data to server
      this.http.post("http://localhost:8000/api/guide", formData).subscribe(
        (val) => {
          console.log("POST call successful value returned in body", console.table(val));
        }
      );
    }
    else {
      console.log("No file selected");
    }
  }

  onFileSelected(event : any) {
    this.selectedFile = event.target.files[0];
  }
}
