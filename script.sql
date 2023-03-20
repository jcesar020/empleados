CREATE TABLE [carreras] (
  [id] bigint  IDENTITY(1,1) NOT NULL,
  [nombre] nvarchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [created_at] datetime  NULL,
  [updated_at] datetime  NULL,
  [Descripcion] nvarchar(200) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  CONSTRAINT [PK__carreras__3213E83F3ED1E206] PRIMARY KEY CLUSTERED ([id])
WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)
GO
ALTER TABLE [carreras] SET (LOCK_ESCALATION = TABLE)
GO

CREATE TABLE [educaciones] (
  [id] bigint  IDENTITY(1,1) NOT NULL,
  [IdEmpleado] bigint  NOT NULL,
  [IdCarreraProfesional] bigint  NOT NULL,
  [IdEstadoEducacion] bigint  NOT NULL,
  [Vigente] bit  NOT NULL,
  [created_at] datetime  NULL,
  [updated_at] datetime  NULL,
  CONSTRAINT [PK__educacio__3213E83FB26AEEFC] PRIMARY KEY CLUSTERED ([id])
WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)
GO
ALTER TABLE [educaciones] SET (LOCK_ESCALATION = TABLE)
GO

CREATE TABLE [empleados] (
  [id] bigint  IDENTITY(1,1) NOT NULL,
  [PrimerNombre] nvarchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [SegundoNombre] nvarchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [TercerNombre] nvarchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [PrimerApellido] nvarchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [SegundoApellido] nvarchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [ApellidoMatrimonio] nvarchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [Genero] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [FechaNacimiento] date  NOT NULL,
  [created_at] datetime  NULL,
  [updated_at] datetime  NULL,
  CONSTRAINT [PK__empleado__3213E83F4FF1466B] PRIMARY KEY CLUSTERED ([id])
WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON),
  CONSTRAINT [CK__empleados__Gener__2F10007B] CHECK ([Genero] = N'O' OR [Genero] = N'M' OR [Genero] = N'F')
)
GO
ALTER TABLE [empleados] SET (LOCK_ESCALATION = TABLE)
GO

CREATE TABLE [estado_educacions] (
  [id] bigint  IDENTITY(1,1) NOT NULL,
  [Nombre] nvarchar(25) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [created_at] datetime  NULL,
  [updated_at] datetime  NULL,
  CONSTRAINT [PK__estado_e__3213E83FE533F884] PRIMARY KEY CLUSTERED ([id])
WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)
GO
ALTER TABLE [estado_educacions] SET (LOCK_ESCALATION = TABLE)
GO

CREATE TABLE [failed_jobs] (
  [id] bigint  IDENTITY(1,1) NOT NULL,
  [uuid] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [connection] nvarchar(max) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [queue] nvarchar(max) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [payload] nvarchar(max) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [exception] nvarchar(max) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [failed_at] datetime DEFAULT getdate() NOT NULL,
  CONSTRAINT [PK__failed_j__3213E83FF8345FCF] PRIMARY KEY CLUSTERED ([id])
WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)
GO
ALTER TABLE [failed_jobs] SET (LOCK_ESCALATION = TABLE)
GO
CREATE UNIQUE NONCLUSTERED INDEX [failed_jobs_uuid_unique]
ON [].[failed_jobs] (
  [uuid] ASC
)
GO

CREATE TABLE [migrations] (
  [id] int  IDENTITY(1,1) NOT NULL,
  [migration] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [batch] int  NOT NULL,
  CONSTRAINT [PK__migratio__3213E83F6A0D1AA4] PRIMARY KEY CLUSTERED ([id])
WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)
GO
ALTER TABLE [migrations] SET (LOCK_ESCALATION = TABLE)
GO

CREATE TABLE [password_resets] (
  [email] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [token] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [created_at] datetime  NULL,
  CONSTRAINT [password_resets_email_primary] PRIMARY KEY CLUSTERED ([email])
WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)
GO
ALTER TABLE [password_resets] SET (LOCK_ESCALATION = TABLE)
GO

CREATE TABLE [personal_access_tokens] (
  [id] bigint  IDENTITY(1,1) NOT NULL,
  [tokenable_type] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [tokenable_id] bigint  NOT NULL,
  [name] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [token] nvarchar(64) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [abilities] nvarchar(max) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [last_used_at] datetime  NULL,
  [expires_at] datetime  NULL,
  [created_at] datetime  NULL,
  [updated_at] datetime  NULL,
  CONSTRAINT [PK__personal__3213E83FE605833F] PRIMARY KEY CLUSTERED ([id])
WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)
GO
ALTER TABLE [personal_access_tokens] SET (LOCK_ESCALATION = TABLE)
GO
CREATE NONCLUSTERED INDEX [personal_access_tokens_tokenable_type_tokenable_id_index]
ON [].[personal_access_tokens] (
  [tokenable_type] ASC,
  [tokenable_id] ASC
)
GO
CREATE UNIQUE NONCLUSTERED INDEX [personal_access_tokens_token_unique]
ON [].[personal_access_tokens] (
  [token] ASC
)
GO

CREATE TABLE [users] (
  [id] bigint  IDENTITY(1,1) NOT NULL,
  [name] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [email] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [email_verified_at] datetime  NULL,
  [password] nvarchar(255) COLLATE SQL_Latin1_General_CP1_CI_AS  NOT NULL,
  [remember_token] nvarchar(100) COLLATE SQL_Latin1_General_CP1_CI_AS  NULL,
  [created_at] datetime  NULL,
  [updated_at] datetime  NULL,
  CONSTRAINT [PK__users__3213E83F6DEC9740] PRIMARY KEY CLUSTERED ([id])
WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON)
)
GO
ALTER TABLE [users] SET (LOCK_ESCALATION = TABLE)
GO
CREATE UNIQUE NONCLUSTERED INDEX [users_email_unique]
ON [].[users] (
  [email] ASC
)
GO

ALTER TABLE [educaciones] ADD CONSTRAINT [educaciones_idempleado_foreign] FOREIGN KEY ([IdEmpleado]) REFERENCES [empleados] ([id]) ON DELETE NO ACTION ON UPDATE NO ACTION
GO
ALTER TABLE [educaciones] ADD CONSTRAINT [educaciones_idcarreraprofesional_foreign] FOREIGN KEY ([IdCarreraProfesional]) REFERENCES [carreras] ([id]) ON DELETE NO ACTION ON UPDATE NO ACTION
GO
ALTER TABLE [educaciones] ADD CONSTRAINT [educaciones_idestadoeducacion_foreign] FOREIGN KEY ([IdEstadoEducacion]) REFERENCES [estado_educacions] ([id]) ON DELETE NO ACTION ON UPDATE NO ACTION
GO

