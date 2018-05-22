import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { TableBuilderRoutingModule } from './table-builder-routing.module';
import { CreateComponent } from './create/create.component';
import { ListComponent } from './list/list.component';
import { ListItemComponent } from './list/list-item/list-item.component';
import { SharedModule } from '@shared/shared.module';
import { PreviewComponent } from './preview/preview.component';

@NgModule({
  imports: [
    CommonModule,
    TableBuilderRoutingModule,
    SharedModule
  ],
  declarations: [CreateComponent, ListComponent, ListItemComponent, PreviewComponent]
})
export class TableBuilderModule { }
