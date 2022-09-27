CREATE DATABASE FJuridica;
USE FJuridica;
CREATE USER [becho] FOR LOGIN [becho] WITH DEFAULT_SCHEMA=[dbo]
GO
ALTER ROLE [db_owner] ADD MEMBER [becho]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [becho]
GO
ALTER ROLE [db_backupoperator] ADD MEMBER [becho]
GO
ALTER ROLE [db_datareader] ADD MEMBER [becho]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [becho]
GO
/****** Object:  Table [dbo].[Abogados]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Abogados](
	[Id_abogado] [int] IDENTITY(1,1) NOT NULL,
	[Id_persona] [int] NOT NULL,
	[No_Colegiado] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Abogados] PRIMARY KEY CLUSTERED 
(
	[Id_abogado] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Acta]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Acta](
	[Id_acta] [int] IDENTITY(1,1) NOT NULL,
	[Id_caso] [int] NOT NULL,
	[Fecha] [date] NOT NULL,
	[Descripcion] [varchar](255) NOT NULL,
	[Hechos] [image] NULL,
	[Medida] [varchar](255) NULL,
 CONSTRAINT [PK_Acta] PRIMARY KEY CLUSTERED 
(
	[Id_acta] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Caso]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Caso](
	[Id_caso] [int] IDENTITY(1,1) NOT NULL,
	[Id_persona] [int] NOT NULL,
	[Descripcion] [varchar](255) NOT NULL,
	[Fecha_inicio] [date] NOT NULL,
	[Fecha_fin] [date] NULL,
	[Nombre_Juez] [varchar](100) NULL,
	[Id_tipoCaso] [int] NOT NULL,
	[Id_persona1] [int] NOT NULL,
	[Id_estado] [int] NOT NULL,
	[Conclusion] [varchar](50) NULL,
 CONSTRAINT [PK_Caso] PRIMARY KEY CLUSTERED 
(
	[Id_caso] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Estado]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Estado](
	[Id_estado] [int] IDENTITY(1,1) NOT NULL,
	[Estado] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Estado] PRIMARY KEY CLUSTERED 
(
	[Id_estado] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Persona]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Persona](
	[Id_persona] [int] IDENTITY(1,1) NOT NULL,
	[Nombres] [varchar](75) NOT NULL,
	[Apellidos] [varchar](75) NOT NULL,
	[DPI] [varchar](13) NULL,
	[Direccion] [varchar](75) NOT NULL,
	[Id_tipoPersona] [int] NOT NULL,
 CONSTRAINT [PK_Persona] PRIMARY KEY CLUSTERED 
(
	[Id_persona] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Pruebas]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Pruebas](
	[Id_prueba] [int] IDENTITY(1,1) NOT NULL,
	[Prueba] [image] NOT NULL,
	[Id_estado] [int] NOT NULL,
	[Id_caso] [int] NOT NULL,
 CONSTRAINT [PK_Pruebas] PRIMARY KEY CLUSTERED 
(
	[Id_prueba] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Testigo]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Testigo](
	[Id_testigo] [int] IDENTITY(1,1) NOT NULL,
	[Id_persona1] [int] NOT NULL,
	[Relacion] [varchar](50) NOT NULL,
	[Id_persona2] [int] NOT NULL,
	[Id_caso] [int] NOT NULL,
 CONSTRAINT [PK_Testigo] PRIMARY KEY CLUSTERED 
(
	[Id_testigo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Tipo_caso]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tipo_caso](
	[Id_tipoCaso] [int] IDENTITY(1,1) NOT NULL,
	[Tipo_caso] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Tipo_caso] PRIMARY KEY CLUSTERED 
(
	[Id_tipoCaso] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Tipo_persona]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tipo_persona](
	[Id_tipoPersona] [int] IDENTITY(1,1) NOT NULL,
	[Tipo_persona] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Tipo_persona] PRIMARY KEY CLUSTERED 
(
	[Id_tipoPersona] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Tipo_Usuario]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Tipo_Usuario](
	[Id_tipoUsuario] [int] IDENTITY(1,1) NOT NULL,
	[Tipo_usuario] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Tipo_Usuario] PRIMARY KEY CLUSTERED 
(
	[Id_tipoUsuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Usuario]    Script Date: 8/09/2022 19:58:55 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Usuario](
	[Id_Usuario] [int] IDENTITY(1,1) NOT NULL,
	[Id_tipoUsuario] [int] NOT NULL,
	[Id_persona] [int] NOT NULL,
	[Correo] [varchar](150) NOT NULL,
	[Contraseña] [varchar](150) NOT NULL,
 CONSTRAINT [PK_Usuario] PRIMARY KEY CLUSTERED 
(
	[Id_Usuario] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[Abogados] ON 
GO
INSERT [dbo].[Abogados] ([Id_abogado], [Id_persona], [No_Colegiado]) VALUES (1, 1, N'2427')
GO
SET IDENTITY_INSERT [dbo].[Abogados] OFF
GO
SET IDENTITY_INSERT [dbo].[Estado] ON 
GO
INSERT [dbo].[Estado] ([Id_estado], [Estado]) VALUES (1, N'PENDIENTE')
GO
INSERT [dbo].[Estado] ([Id_estado], [Estado]) VALUES (2, N'EN CURSO')
GO
INSERT [dbo].[Estado] ([Id_estado], [Estado]) VALUES (3, N'ACEPTADA')
GO
INSERT [dbo].[Estado] ([Id_estado], [Estado]) VALUES (4, N'NEGADA')
GO
SET IDENTITY_INSERT [dbo].[Estado] OFF
GO
SET IDENTITY_INSERT [dbo].[Persona] ON 
GO
INSERT [dbo].[Persona] ([Id_persona], [Nombres], [Apellidos], [DPI], [Direccion], [Id_tipoPersona]) VALUES (1, N'Karen Yanira', N'Ramos Baten', N'3018916020102', N'Villa Canales', 4)
GO
INSERT [dbo].[Persona] ([Id_persona], [Nombres], [Apellidos], [DPI], [Direccion], [Id_tipoPersona]) VALUES (2, N'Gerson Joel', N'Ramirez Fanco', N'3018916140103', N'Villa Nueva', 2)
GO
INSERT [dbo].[Persona] ([Id_persona], [Nombres], [Apellidos], [DPI], [Direccion], [Id_tipoPersona]) VALUES (3, N'Shauny', N'Garcia Perez', N'3017944510102', N'Villa Canales', 3)
GO
INSERT [dbo].[Persona] ([Id_persona], [Nombres], [Apellidos], [DPI], [Direccion], [Id_tipoPersona]) VALUES (24, N'Gervin', N'Gomez', N'3124656820102', N'Amatitlan', 2)
GO
INSERT [dbo].[Persona] ([Id_persona], [Nombres], [Apellidos], [DPI], [Direccion], [Id_tipoPersona]) VALUES (59, N'Sharon', N'Perez', N'3021551145012', N'Amatitlan', 2)
GO
SET IDENTITY_INSERT [dbo].[Persona] OFF
GO
SET IDENTITY_INSERT [dbo].[Tipo_caso] ON 
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (1, N'VIOLENCIA DOMESTICA')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (2, N'VIOLENCIA CONTRA LA MUJER')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (3, N'DEMANDA LABORAL')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (4, N'HOMICISIO')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (5, N'ABORTO')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (6, N'AGRESION CON ARMA BLANCA')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (7, N'AGRESION CON ARMA DE FUEGO')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (8, N'DELITO CONTRA EL HONOR')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (9, N'AGRESION SEXUAL')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (10, N'INDEMNIDAD SEXUAL')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (11, N'DELITO CONTRA LA LIBERTAD')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (12, N'ALLANAMIENTO DE MORADA')
GO
INSERT [dbo].[Tipo_caso] ([Id_tipoCaso], [Tipo_caso]) VALUES (13, N'SUSTRACCION DE MENORES')
GO
SET IDENTITY_INSERT [dbo].[Tipo_caso] OFF
GO
SET IDENTITY_INSERT [dbo].[Tipo_persona] ON 
GO
INSERT [dbo].[Tipo_persona] ([Id_tipoPersona], [Tipo_persona]) VALUES (1, N'DEMANDADO')
GO
INSERT [dbo].[Tipo_persona] ([Id_tipoPersona], [Tipo_persona]) VALUES (2, N'DEMANDANTE')
GO
INSERT [dbo].[Tipo_persona] ([Id_tipoPersona], [Tipo_persona]) VALUES (3, N'ADMINISTRADOR')
GO
INSERT [dbo].[Tipo_persona] ([Id_tipoPersona], [Tipo_persona]) VALUES (4, N'ABOGADO')
GO
INSERT [dbo].[Tipo_persona] ([Id_tipoPersona], [Tipo_persona]) VALUES (5, N'TESTIGO')
GO
SET IDENTITY_INSERT [dbo].[Tipo_persona] OFF
GO
SET IDENTITY_INSERT [dbo].[Tipo_Usuario] ON 
GO
INSERT [dbo].[Tipo_Usuario] ([Id_tipoUsuario], [Tipo_usuario]) VALUES (1, N'CLIENTE')
GO
INSERT [dbo].[Tipo_Usuario] ([Id_tipoUsuario], [Tipo_usuario]) VALUES (2, N'ADMINISTRADOR')
GO
INSERT [dbo].[Tipo_Usuario] ([Id_tipoUsuario], [Tipo_usuario]) VALUES (3, N'ABOGADO')
GO
SET IDENTITY_INSERT [dbo].[Tipo_Usuario] OFF
GO
SET IDENTITY_INSERT [dbo].[Usuario] ON 
GO
INSERT [dbo].[Usuario] ([Id_Usuario], [Id_tipoUsuario], [Id_persona], [Correo], [Contraseña]) VALUES (1, 3, 1, N'KARENR@gmail.com', N'karen1415')
GO
INSERT [dbo].[Usuario] ([Id_Usuario], [Id_tipoUsuario], [Id_persona], [Correo], [Contraseña]) VALUES (2, 1, 2, N'joelRAMIREZ@gmail.com', N'Gerson123')
GO
INSERT [dbo].[Usuario] ([Id_Usuario], [Id_tipoUsuario], [Id_persona], [Correo], [Contraseña]) VALUES (3, 2, 3, N'ShaunyG@gmail.com', N'Shauny1333')
GO
INSERT [dbo].[Usuario] ([Id_Usuario], [Id_tipoUsuario], [Id_persona], [Correo], [Contraseña]) VALUES (10, 1, 24, N'GeoG@gmail.com', N'123456')
GO
INSERT [dbo].[Usuario] ([Id_Usuario], [Id_tipoUsuario], [Id_persona], [Correo], [Contraseña]) VALUES (11, 1, 59, N'SharonP@gmail.com', N'AS123456')
GO
SET IDENTITY_INSERT [dbo].[Usuario] OFF
GO
ALTER TABLE [dbo].[Abogados]  WITH CHECK ADD  CONSTRAINT [FK_Abogados_Persona] FOREIGN KEY([Id_persona])
REFERENCES [dbo].[Persona] ([Id_persona])
GO
ALTER TABLE [dbo].[Abogados] CHECK CONSTRAINT [FK_Abogados_Persona]
GO
ALTER TABLE [dbo].[Acta]  WITH CHECK ADD  CONSTRAINT [FK_Acta_Caso] FOREIGN KEY([Id_caso])
REFERENCES [dbo].[Caso] ([Id_caso])
GO
ALTER TABLE [dbo].[Acta] CHECK CONSTRAINT [FK_Acta_Caso]
GO
ALTER TABLE [dbo].[Caso]  WITH CHECK ADD  CONSTRAINT [FK_Caso_Estado] FOREIGN KEY([Id_estado])
REFERENCES [dbo].[Estado] ([Id_estado])
GO
ALTER TABLE [dbo].[Caso] CHECK CONSTRAINT [FK_Caso_Estado]
GO
ALTER TABLE [dbo].[Caso]  WITH CHECK ADD  CONSTRAINT [FK_Caso_Persona] FOREIGN KEY([Id_persona])
REFERENCES [dbo].[Persona] ([Id_persona])
GO
ALTER TABLE [dbo].[Caso] CHECK CONSTRAINT [FK_Caso_Persona]
GO
ALTER TABLE [dbo].[Caso]  WITH CHECK ADD  CONSTRAINT [FK_Caso_Persona1] FOREIGN KEY([Id_persona1])
REFERENCES [dbo].[Persona] ([Id_persona])
GO
ALTER TABLE [dbo].[Caso] CHECK CONSTRAINT [FK_Caso_Persona1]
GO
ALTER TABLE [dbo].[Caso]  WITH CHECK ADD  CONSTRAINT [FK_Caso_Tipo_caso] FOREIGN KEY([Id_tipoCaso])
REFERENCES [dbo].[Tipo_caso] ([Id_tipoCaso])
GO
ALTER TABLE [dbo].[Caso] CHECK CONSTRAINT [FK_Caso_Tipo_caso]
GO
ALTER TABLE [dbo].[Persona]  WITH CHECK ADD  CONSTRAINT [FK_Persona_Tipo_persona] FOREIGN KEY([Id_tipoPersona])
REFERENCES [dbo].[Tipo_persona] ([Id_tipoPersona])
GO
ALTER TABLE [dbo].[Persona] CHECK CONSTRAINT [FK_Persona_Tipo_persona]
GO
ALTER TABLE [dbo].[Pruebas]  WITH CHECK ADD  CONSTRAINT [FK_Pruebas_Caso] FOREIGN KEY([Id_caso])
REFERENCES [dbo].[Caso] ([Id_caso])
GO
ALTER TABLE [dbo].[Pruebas] CHECK CONSTRAINT [FK_Pruebas_Caso]
GO
ALTER TABLE [dbo].[Pruebas]  WITH CHECK ADD  CONSTRAINT [FK_Pruebas_Estado] FOREIGN KEY([Id_estado])
REFERENCES [dbo].[Estado] ([Id_estado])
GO
ALTER TABLE [dbo].[Pruebas] CHECK CONSTRAINT [FK_Pruebas_Estado]
GO
ALTER TABLE [dbo].[Testigo]  WITH CHECK ADD  CONSTRAINT [FK_Testigo_Persona] FOREIGN KEY([Id_persona1])
REFERENCES [dbo].[Persona] ([Id_persona])
GO
ALTER TABLE [dbo].[Testigo] CHECK CONSTRAINT [FK_Testigo_Persona]
GO
ALTER TABLE [dbo].[Testigo]  WITH CHECK ADD  CONSTRAINT [FK_Testigo_Persona1] FOREIGN KEY([Id_persona2])
REFERENCES [dbo].[Persona] ([Id_persona])
GO
ALTER TABLE [dbo].[Testigo] CHECK CONSTRAINT [FK_Testigo_Persona1]
GO
ALTER TABLE [dbo].[Usuario]  WITH CHECK ADD  CONSTRAINT [FK_Usuario_Persona] FOREIGN KEY([Id_persona])
REFERENCES [dbo].[Persona] ([Id_persona])
GO
ALTER TABLE [dbo].[Usuario] CHECK CONSTRAINT [FK_Usuario_Persona]
GO
ALTER TABLE [dbo].[Usuario]  WITH CHECK ADD  CONSTRAINT [FK_Usuario_Tipo_Usuario] FOREIGN KEY([Id_tipoUsuario])
REFERENCES [dbo].[Tipo_Usuario] ([Id_tipoUsuario])
GO
ALTER TABLE [dbo].[Usuario] CHECK CONSTRAINT [FK_Usuario_Tipo_Usuario]
GO
USE [master]
GO
ALTER DATABASE [FJuridica] SET  READ_WRITE 
GO
