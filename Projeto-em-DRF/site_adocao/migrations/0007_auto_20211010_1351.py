# Generated by Django 3.0.8 on 2021-10-10 16:51

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('site_adocao', '0006_auto_20211010_1349'),
    ]

    operations = [
        migrations.RenameField(
            model_name='cachorro',
            old_name='foto0',
            new_name='foto3',
        ),
        migrations.RenameField(
            model_name='gato',
            old_name='foto0',
            new_name='foto3',
        ),
        migrations.RenameField(
            model_name='outro',
            old_name='foto0',
            new_name='foto3',
        ),
    ]