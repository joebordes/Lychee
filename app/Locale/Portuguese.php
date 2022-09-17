<?php

namespace App\Locale;

use App\Contracts\Language;

final class Portuguese implements Language
{
	public function code(): string
	{
		return 'pt';
	}

	public function get_locale(): array
	{
		$locale = [
			'USERNAME' => 'nome de utilizador',
			'PASSWORD' => 'password',
			'ENTER' => 'Inserir',
			'CANCEL' => 'Cancelar',
			'SIGN_IN' => 'Iniciar Sessão',
			'CLOSE' => 'Fechar',
			'SETTINGS' => 'Configurações',
			'SEARCH' => 'Pesquisar ...',
			'MORE' => 'Mais',
			'DEFAULT' => 'Predefinição',
			'GALLERY' => 'Gallery',

			'USERS' => 'Utilizadores',
			'CREATE' => 'Create',
			'USERS_EMPTY' => 'User list is empty!',
			'U2F' => 'U2F',
			'NOTIFICATIONS' => 'Notifications',
			'SHARING' => 'Partilha',
			'SHARING_EMPTY' => 'Sharing list is empty!',
			'SHARING_WITH' => 'with',
			'SHARING_SHARE' => 'Share',
			'SHARING_UNDO' => 'undo',
			'SHARING_REDO' => 'redo',
			'CHANGE_LOGIN' => 'Alterar Login',
			'CHANGE_SORTING' => 'Alterar Ordenação',
			'SET_DROPBOX' => 'Escolher Dropbox',
			'ABOUT_LYCHEE' => 'Acerca do Lychee',
			'DIAGNOSTICS' => 'Diagnosticos',
			'DIAGNOSTICS_GET_SIZE' => 'Pedir utilização de espaço',
			'LOGS' => 'Mostrar Logs',
			'CLEAN_LOGS' => 'Clean Noise',
			'CLEAR' => 'Clear',
			'SIGN_OUT' => 'Terminar Sessão',
			'UPDATE_AVAILABLE' => 'Atualização disponível!',
			'MIGRATION_AVAILABLE' => 'Migração disponível!',
			'DEFAULT_LICENSE' => 'Default licença for new uploads:',
			'SET_LICENSE' => 'Escolher Licença',
			'SET_OVERLAY_TYPE' => 'Escolher Overlay',
			'SET_MAP_PROVIDER' => 'Escolher OpenStreetMap tiles provider',
			'FULL_SETTINGS' => 'Full Settings',
			'UPDATE' => 'Update',
			'RESET' => 'Reset',
			'DISABLE_TOKEN_TOOLTIP' => 'Disable',
			'ENABLE_TOKEN' => 'Enable API token',
			'DISABLED_TOKEN_STATUS_MSG' => 'Disabled',
			'TOKEN_BUTTON' => 'API Token ...',
			'TOKEN_NOT_AVAILABLE' => 'You have already viewed this token.',
			'TOKEN_WAIT' => 'Wait ...',

			'SMART_ALBUMS' => 'Smart álbums',
			'SHARED_ALBUMS' => 'Álbums partilhados',
			'ALBUMS' => 'Álbums',
			'PHOTOS' => 'Fotos',
			'SEARCH_RESULTS' => 'Resultados da pesquisa',

			'RENAME' => 'Renomear',
			'RENAME_ALL' => 'Renomear Seleção',
			'MERGE' => 'Unir',
			'MERGE_ALL' => 'Unir Seleção',
			'MAKE_PUBLIC' => 'Tornar Público',
			'SHARE_ALBUM' => 'Partilhar Álbum',
			'SHARE_PHOTO' => 'Partilhar Fotografia',
			'VISIBILITY_ALBUM' => 'Visibilidade do Álbum',
			'VISIBILITY_PHOTO' => 'Visibilidade da Fotografia',
			'DOWNLOAD_ALBUM' => 'Transferir Álbum',
			'ABOUT_ALBUM' => 'Acerca do Álbum',
			'DELETE_ALBUM' => 'Eliminar Álbum',
			'MOVE_ALBUM' => 'Moverr Álbum',
			'FULLSCREEN_ENTER' => 'Entrar em Tela Cheia',
			'FULLSCREEN_EXIT' => 'Sair da Tela Cheia',

			'SHARING_ALBUM_USERS' => 'Partilhar este álbum com utilizadores',
			'WAIT_FETCH_DATA' => 'Por favor aguarde enquanto transferimos os dados...',
			'SHARING_ALBUM_USERS_NO_USERS' => 'Não há utilizadores com quem partilhar o álbum',
			'SHARING_ALBUM_USERS_LONG_MESSAGE' => 'Selecione os utilizadores com quem quer partilhar este álbum',

			'DELETE_ALBUM_QUESTION' => 'Eliminar Álbum e Fotos',
			'KEEP_ALBUM' => 'Manter Álbum',
			'DELETE_ALBUM_CONFIRMATION' => 'De certeza que quer eliminar o álbum \'%s\' e todas as fotografias contidas? Esta ação não pode ser desfeita!',

			'DELETE_TAG_ALBUM_QUESTION' => 'Delete Album',
			'DELETE_TAG_ALBUM_CONFIRMATION' => 'Are you sure you want to delete the album \'%s\' (any photos inside will not be deleted)? This action can\'t be undone!',

			'DELETE_ALBUMS_QUESTION' => 'Eliminar Álbums e Fotos',
			'KEEP_ALBUMS' => 'Manter Álbums',
			'DELETE_ALBUMS_CONFIRMATION' => 'De certeza que quer eliminar todos %d os álbums e todas as fotografias neles contidas? Esta ação não pode ser desfeita!',

			'DELETE_UNSORTED_CONFIRM' => 'De certeza que quer eliminar todas as fotografias de \'Desordenadas\'? Esta ação não pode ser desfeita!',
			'CLEAR_UNSORTED' => 'Limpar Desordenadas',
			'KEEP_UNSORTED' => 'Manter Desordenadas',

			'EDIT_SHARING' => 'Editar Sharing',
			'MAKE_PRIVATE' => 'Tornar Privado',

			'CLOSE_ALBUM' => 'Fechar Álbum',
			'CLOSE_PHOTO' => 'Fechar Fotografia',
			'CLOSE_MAP' => 'Fechar Mapa',

			'ADD' => 'Adicionar',
			'MOVE' => 'Mover',
			'MOVE_ALL' => 'Mover Selecionadas',
			'DUPLICATE' => 'Duplicar',
			'DUPLICATE_ALL' => 'Duplicar Selecionadas',
			'COPY_TO' => 'Copiar para...',
			'COPY_ALL_TO' => 'Copiar Selecionadas para...',
			'DELETE' => 'Eliminar',
			'SAVE' => 'Save',
			'DELETE_ALL' => 'Eliminar Selecionadas',
			'DOWNLOAD' => 'Transferir',
			'DOWNLOAD_ALL' => 'Transferir Selecionadas',
			'UPLOAD_PHOTO' => 'Enviar Fotografia',
			'IMPORT_LINK' => 'Importar a partir de um Link',
			'IMPORT_DROPBOX' => 'Importar do Dropbox',
			'IMPORT_SERVER' => 'Importar de um Servidor',
			'NEW_ALBUM' => 'Novo Álbum',
			'NEW_TAG_ALBUM' => 'Nova Etiqueta de Álbum',
			'UPLOAD_TRACK' => 'Upload track',
			'DELETE_TRACK' => 'Delete track',

			'TITLE_NEW_ALBUM' => 'Insira um título para o novo álbum:',
			'UNTITLED' => 'Sem Título',
			'UNSORTED' => 'Desordenadas',
			'STARRED' => 'Favoritas',
			'RECENT' => 'Recentes',
			'PUBLIC' => 'Públicas',
			'NUM_PHOTOS' => 'Fotografias',

			'CREATE_ALBUM' => 'Criar Álbum',
			'CREATE_TAG_ALBUM' => 'Criar Etiqueta Álbum',

			'STAR_PHOTO' => 'Marcar como Favorita',
			'STAR' => 'Favorita',
			'UNSTAR' => 'Unstar',
			'STAR_ALL' => 'Marcar Selecionadas como Favoritas',
			'UNSTAR_ALL' => 'Unstar Selected',
			'TAGS' => 'Etiqueta',
			'TAGS_ALL' => 'Etiquetar Selecionadas',
			'UNSTAR_PHOTO' => 'Desmarcar como Favorita',
			'SET_COVER' => 'Escolher para Capa de Álbum',
			'REMOVE_COVER' => 'Remover Capa de Álbum',

			'FULL_PHOTO' => 'Abrir Original',
			'ABOUT_PHOTO' => 'Acerca da Fotografia',
			'DISPLAY_FULL_MAP' => 'Mapa',
			'DIRECT_LINK' => 'Link Direto',
			'DIRECT_LINKS' => 'Links Diretos',
			'QR_CODE' => 'QR Code',

			'ALBUM_ABOUT' => 'Acerca de',
			'ALBUM_BASICS' => 'Básicos',
			'ALBUM_TITLE' => 'Título',
			'ALBUM_NEW_TITLE' => 'Inserir novo título para este álbum:',
			'ALBUMS_NEW_TITLE' => 'Inserir um título para todos %d álbums selecionados:',
			'ALBUM_SET_TITLE' => 'Escolher Título',
			'ALBUM_DESCRIPTION' => 'Descrição',
			'ALBUM_SHOW_TAGS' => 'Etiquetas para mostrar',
			'ALBUM_NEW_DESCRIPTION' => 'Inserir uma nova descrição para este álbum:',
			'ALBUM_SET_DESCRIPTION' => 'Escolher Descrição',
			'ALBUM_NEW_SHOWTAGS' => 'Inserir etiquetas de fotografias que irão ficar visíveis neste álbum:',
			'ALBUM_SET_SHOWTAGS' => 'Escolher etiquetas a mostrar',
			'ALBUM_ALBUM' => 'Álbum',
			'ALBUM_CREATED' => 'Criado',
			'ALBUM_IMAGES' => 'Imagens',
			'ALBUM_VIDEOS' => 'Videos',
			'ALBUM_SUBALBUMS' => 'Subálbums',
			'ALBUM_SHARING' => 'Partilhar',
			'ALBUM_SHR_YES' => 'SIM',
			'ALBUM_SHR_NO' => 'Não',
			'ALBUM_PUBLIC' => 'Público',
			'ALBUM_PUBLIC_EXPL' => 'Álbum pode ser visto por outros, sujeito às restrições abaixo.',
			'ALBUM_FULL' => 'Original',
			'ALBUM_FULL_EXPL' => 'Imagens na resolução original estão disponíveis.',
			'ALBUM_HIDDEN' => 'Oculto',
			'ALBUM_HIDDEN_EXPL' => 'Apenas pessoas com o link direto verão este álbum.',
			'ALBUM_MARK_NSFW' => 'Marcar álbum como sensível',
			'ALBUM_UNMARK_NSFW' => 'Desmarcar álbum como sensível',
			'ALBUM_NSFW' => 'Sensível',
			'ALBUM_NSFW_EXPL' => 'Álbum está marcado como contendo conteúdo sensível.',
			'ALBUM_DOWNLOADABLE' => 'Transferível',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Visitantes da tua galeria podem transferir este álbum.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Botão Partilhar está visível',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Mostrar links de partilha nas redes sociais.',
			'ALBUM_PASSWORD' => 'Password',
			'ALBUM_PASSWORD_PROT' => 'Protegido por password',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Álbum apenas acessível com uma password válida.',
			'ALBUM_PASSWORD_REQUIRED' => 'Este álbum está protegido por password. Inserir a password para ver as fotografias deste álbum:',
			'ALBUM_MERGE' => 'De certeza que quer fundir o álbum \'%1$s\' com o álbum \'%2$s\'?',
			'ALBUMS_MERGE' => 'De certeza que quer fundir todos os álbums selecionados com o álbum \'%s\'?',
			'MERGE_ALBUM' => 'Fundir Álbums',
			'DONT_MERGE' => 'Não Fundir',
			'ALBUM_MOVE' => 'De certeza que quer mover o álbum \'%1$s\' para o álbum \'%2%s\'?',
			'ALBUMS_MOVE' => 'De certeza que quer mover todos os álbums selecionados para o álbum \'%s\'?',
			'MOVE_ALBUMS' => 'Mover Álbums',
			'NOT_MOVE_ALBUMS' => 'Não Mover',
			'ROOT' => 'Álbums',
			'ALBUM_REUSE' => 'Reutilizar',
			'ALBUM_LICENSE' => 'Licença',
			'ALBUM_SET_LICENSE' => 'Escolher Licença',
			'ALBUM_LICENSE_HELP' => 'Precisa de ajuda para escolher?',
			'ALBUM_LICENSE_NONE' => 'Nenhuma',
			'ALBUM_RESERVED' => 'Todos os Direitos Reservados',
			'ALBUM_SET_ORDER' => 'Escolher Ordem',
			'ALBUM_ORDERING' => 'Ordenar por',
			'ALBUM_OWNER' => 'Owner',

			'PHOTO_ABOUT' => 'Acerca de',
			'PHOTO_BASICS' => 'Básicos',
			'PHOTO_TITLE' => 'Título',
			'PHOTO_NEW_TITLE' => 'Inserir um novo título para esta fotografia:',
			'PHOTO_SET_TITLE' => 'Escolher Título',
			'PHOTO_UPLOADED' => 'Enviada',
			'PHOTO_DESCRIPTION' => 'Descrição',
			'PHOTO_NEW_DESCRIPTION' => 'Inserir uma nova descrição para esta fotografia:',
			'PHOTO_SET_DESCRIPTION' => 'Escolher Descrição',
			'PHOTO_NEW_LICENSE' => 'Adicionar uma Licença',
			'PHOTO_SET_LICENSE' => 'Escolher Licença',
			'PHOTO_LICENSE' => 'Licença',
			'PHOTO_LICENSE_HELP' => 'Need help choosing?',
			'PHOTO_REUSE' => 'Reutilizar',
			'PHOTO_LICENSE_NONE' => 'Nenhuma',
			'PHOTO_RESERVED' => 'Todos os Direitos Reservados',
			'PHOTO_LATITUDE' => 'Latitude',
			'PHOTO_LONGITUDE' => 'Longitude',
			'PHOTO_ALTITUDE' => 'Altitude',
			'PHOTO_IMGDIRECTION' => 'Direção',
			'PHOTO_LOCATION' => 'Localização',
			'PHOTO_IMAGE' => 'Imagem',
			'PHOTO_VIDEO' => 'Vídeo',
			'PHOTO_SIZE' => 'Tamanho',
			'PHOTO_FORMAT' => 'Formato',
			'PHOTO_RESOLUTION' => 'Resolução',
			'PHOTO_DURATION' => 'Duração',
			'PHOTO_FPS' => 'Frame rate',
			'PHOTO_TAGS' => 'Etiquetas',
			'PHOTO_NOTAGS' => 'Sem Etiquetas',
			'PHOTO_NEW_TAGS' => 'Inserir as suas etiquetas para esta fotografia. Pode adicionar várias etiquetas separando-as com uma vírgula:',
			'PHOTOS_NEW_TAGS' => 'Inserir as suas etiquetas para todas %d as fotografias selecionadas. Etiquetas existentes vão ser substituídas. Pode adicionar várias etiquetas separando-as com uma vírgula:',
			'PHOTO_SET_TAGS' => 'Escolher Etiquetas',
			'PHOTO_CAMERA' => 'Camera',
			'PHOTO_CAPTURED' => 'Capturada',
			'PHOTO_MAKE' => 'Criada',
			'PHOTO_TYPE' => 'Tipo/Modelo',
			'PHOTO_LENS' => 'Lente',
			'PHOTO_SHUTTER' => 'Velocidade do Obturador',
			'PHOTO_APERTURE' => 'Abertura',
			'PHOTO_FOCAL' => 'Distância Focal',
			'PHOTO_ISO' => 'ISO %s',
			'PHOTO_SHARING' => 'Partilhada',
			'PHOTO_SHR_PUBLIC' => 'Pública',
			'PHOTO_SHR_ALB' => 'Sim (Álbum)',
			'PHOTO_SHR_PHT' => 'Sim (Fotografia)',
			'PHOTO_SHR_NO' => 'Não',
			'PHOTO_DELETE' => 'Eliminar Fotografia',
			'PHOTO_KEEP' => 'Manter Fotografia',
			'PHOTO_DELETE_CONFIRMATION' => 'De certeza que quer eliminar a fotografia \'%s\'? Esta ação não pode ser desfeita!',
			'PHOTO_DELETE_ALL' => 'De certeza que quer eliminar todas %d as fotografias selecionadas? Esta ação não pode ser desfeita!',
			'PHOTOS_NEW_TITLE' => 'Inserir um título para todas %d as fotografias selecionadas:',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Esta fotografia está localizada num álbum público. Para tornar esta fotografia privada ou pública, edite a visibilidade do álbum associado.',
			'PHOTO_SHOW_ALBUM' => 'Mostrar Álbum',
			'PHOTO_PUBLIC' => 'Público',
			'PHOTO_PUBLIC_EXPL' => 'Fotografia pode ser vista por outros, sujeita às restrições abaixo.',
			'PHOTO_FULL' => 'Original',
			'PHOTO_FULL_EXPL' => 'Imagem em resolução original está disponível.',
			'PHOTO_HIDDEN' => 'Oculta',
			'PHOTO_HIDDEN_EXPL' => 'Apenas pessoas com o link direto podem ver esta fotografia.',
			'PHOTO_DOWNLOADABLE' => 'Transferível',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Visitantes da sua galeria podem transferir esta fotografia.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Botão Partilhar está visível',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Mostrar links de partilha nas redes sociais.',
			'PHOTO_PASSWORD_PROT' => 'Protegido por password',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Fotografia apenas acessível com uma password válida.',
			'PHOTO_EDIT_SHARING_TEXT' => 'As propriedades de partilha desta fotografia vão ser alteradas para o seguinte:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Porque esta fotografia está localizada num álbum público, herda as configurações de visibilidade desse álbum.  A sua visibilidade atual é mostrada abaixo apenas como informação.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'A visibilidade desta fotografia pode ser afinada através das configurações globais do Lychee. A sua visibilidade atual é mostrada abaixo apenas como informação.',

			'LOADING' => 'A carregar',
			'ERROR' => 'Erro',
			'ERROR_TEXT' => 'Whoops, parece que algo de errado aconteceu. Por favor, atualize a página e tente de novo!',
			'ERROR_DB_1' => 'Foi impossível conectar à base de dados do host porque o acesso foi negado. Verifique o host, username e password e garanta que o acesso através da localização atual é permitido.',
			'ERROR_DB_2' => 'Incapaz de criar a base de dados. Verifique o host, username e password e garanta que o utilizador especificado tem permissões para modificar e adicionar conteúdo à base de dados.',
			'ERROR_CONFIG_FILE' => "Incapaz de guardar esta configuração. Permissão negada em <b>'data/'</b>. Por favor, estabeleça as permissões de leitura, escrita e execução para outros em <b>'data/'</b> e <b>'uploads/'</b>. Dê uma vista de olhos ao readme para mais informação.",
			'ERROR_UNKNOWN' => 'Algo de inesperado aconteceu. Por favor tente de novo e verifique a sua instalação e servidor. Dê uma vista de olhos ao readme para mais informação.',
			'ERROR_LOGIN' => 'Incapaz de guardar o login. Por favor tente de novo com outro nome de utilizador e password!',
			'ERROR_MAP_DEACTIVATED' => 'A funcionalidade do mapa foi desativada nas configurações.',
			'ERROR_SEARCH_DEACTIVATED' => 'A funcionalidade de procura foi desativada nas configurações.',
			'SUCCESS' => 'OK',
			'RETRY' => 'Tentar de novo',

			'SETTINGS_SUCCESS_LOGIN' => 'Informação de Login atualizada.',
			'SETTINGS_SUCCESS_SORT' => 'Ordenação atualizada.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Dropbox Key atualizada.',
			'SETTINGS_SUCCESS_LANG' => 'Linguagem atualizada',
			'SETTINGS_SUCCESS_LAYOUT' => 'Layout atualizado',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'Configuração de Overlay EXIF atualizada',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Pesquisa pública atualizada',
			'SETTINGS_SUCCESS_LICENSE' => 'licença predefinida atualizada',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Configuração da janela do mapa atualizada',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Configuração da janela do mapa para álbums públicos atualizada',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Provider do mapa atualizado',
			'SETTINGS_DROPBOX_KEY' => 'Dropbox API Key',

			'U2F_NOT_SUPPORTED' => 'U2F não suportado. Desculpe.',
			'U2F_NOT_SECURE' => 'Ambiente não seguro. U2F não disponível.',
			'U2F_REGISTER_KEY' => 'Registar novo dispositivo.',
			'U2F_REGISTRATION_SUCCESS' => 'Registo bem-sucedido!',
			'U2F_AUTHENTIFICATION_SUCCESS' => 'Authenticação bem-sucedida!',
			'U2F_CREDENTIALS' => 'Credenciais',
			'U2F_CREDENTIALS_DELETED' => 'Credenciais eliminadas!',
			'U2F_NO_CREDENTIALS' => 'Credentials list is empty!',

			'NEW_PHOTOS_NOTIFICATION' => 'Send new photos notification emails.',
			'SETTINGS_SUCCESS_NEW_PHOTOS_NOTIFICATION' => 'New photos notification updated',
			'USER_EMAIL_INSTRUCTION' => 'Add your email below to enable receiving email notifications. To stop receiving emails, simply remove your email below.',

			'DB_INFO_TITLE' => 'Inserir os detalhes da conecção à base de dados abaixo:',
			'DB_INFO_HOST' => 'Host da Base de Dados (opcional)',
			'DB_INFO_USER' => 'Nome de Utilizador da Base de Dados',
			'DB_INFO_PASSWORD' => 'Password da Base de Dados',
			'DB_INFO_TEXT' => 'O Lychee vai criar a sua própria base de dados. Se for necessário, pode inserir o nome de uma base de dados existente em vez disso:',
			'DB_NAME' => 'Nome da Base de Dados (opcional)',
			'DB_PREFIX' => 'Prefixo das tabelas (opcional)',
			'DB_CONNECT' => 'Conectar',

			'LOGIN_TITLE' => 'Inserir um nome de utilizador e uma password para a sua instalação:',
			'LOGIN_USERNAME' => 'Novo Nome de Utilizador',
			'LOGIN_PASSWORD' => 'Nova Password',
			'LOGIN_PASSWORD_CONFIRM' => 'Confirmar Password',
			'LOGIN_CREATE' => 'Criar Login',

			'PASSWORD_TITLE' => 'Inserir a sua password atual:',
			'PASSWORD_CURRENT' => 'Password Atual',
			'PASSWORD_TEXT' => 'O seu nome de utilizador e password vão ser alterados para o seguinte:',
			'PASSWORD_CHANGE' => 'Alterar Login',

			'EDIT_SHARING_TITLE' => 'Editar Partilha',
			'EDIT_SHARING_TEXT' => 'As propriedades de partilha deste álbum vão ser alteradas para o seguinte:',
			'SHARE_ALBUM_TEXT' => 'Este álbum vai ser partilhado com as seguintes propriedades:',

			'SORT_ALBUM_BY' => 'Ordenar álbums por %1$s numa %2$s ordem.',

			'SORT_ALBUM_SELECT_1' => 'Hora de Criação',
			'SORT_ALBUM_SELECT_2' => 'Título',
			'SORT_ALBUM_SELECT_3' => 'Descrição',
			'SORT_ALBUM_SELECT_4' => 'Público',
			'SORT_ALBUM_SELECT_5' => 'Data da Modificação Mais Recente',
			'SORT_ALBUM_SELECT_6' => 'Data da Modificação Mais Antiga',

			'SORT_PHOTO_BY' => 'Ordenar fotografias por %1$s numa %2$s ordem.',

			'SORT_PHOTO_SELECT_1' => 'Hora de Envio',
			'SORT_PHOTO_SELECT_2' => 'Data de Modificação',
			'SORT_PHOTO_SELECT_3' => 'Título',
			'SORT_PHOTO_SELECT_4' => 'Descrição',
			'SORT_PHOTO_SELECT_5' => 'Público',
			'SORT_PHOTO_SELECT_6' => 'Favorito',
			'SORT_PHOTO_SELECT_7' => 'Formato da Fotografia',

			'SORT_ASCENDING' => 'Ascendente',
			'SORT_DESCENDING' => 'Descendente',
			'SORT_CHANGE' => 'Alterar Ordenação',

			'DROPBOX_TITLE' => 'Escolher a Dropbox Key',
			'DROPBOX_TEXT' => "Para importar fotografias do seu Dropbox, precisa de uma key válida de drop-in do <a href='https://www.dropbox.com/developers/apps/create'>website deles</a>. Crie uma key pessoal e insira-a abaixo:",

			'LANG_TEXT' => 'Alterar língua do Lychee para:',
			'LANG_TITLE' => 'Alterar Linguagem',
			'PUBLIC_SEARCH_TEXT' => 'Pesquisa pública permitida:',
			'IMAGE_OVERLAY_TEXT' => 'Mostrar o overlay da data por defeito:',
			'OVERLAY_TYPE' => 'Data a usar no overlay da imagem:',
			'OVERLAY_NONE' => 'None',
			'OVERLAY_EXIF' => 'Informação EXIF da fotografia',
			'OVERLAY_DESCRIPTION' => 'Descrição da fotografia',
			'OVERLAY_DATE' => 'Data da Fotografia',
			'MAP_DISPLAY_TEXT' => 'Ligar mapas (fornecidos por OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Permitir mapas para álbums públicos (fornecidos por OpenStreetMap):',
			'LOCATION_DECODING' => 'Transformar a informação GPS no nome da localização',
			'LOCATION_SHOW' => 'Mostrar nome da localização',
			'LOCATION_SHOW_PUBLIC' => 'Mostrar nome da localização no modo público',
			'MAP_PROVIDER' => 'Fornecedor das janelas OpenStreetMap:',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (sem HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (sem HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (sem HiDPI)',
			'MAP_PROVIDER_RRZE' => 'Universidade de Erlangen, Alemanha (apenas HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Incluír fotografias de subálbums no mapa:',

			'LAYOUT_TYPE' => 'Disposição das fotografias:',
			'LAYOUT_SQUARES' => 'Miniaturas quadradas',
			'LAYOUT_JUSTIFIED' => 'Com formatação, justificada',
			'LAYOUT_UNJUSTIFIED' => 'Com formatação, não justificada',
			'SET_LAYOUT' => 'Alterar disposição',

			'NSFW_VISIBLE_TEXT_1' => 'Tornar Sensível os álbums visíveis por defeito.',
			'NSFW_VISIBLE_TEXT_2' => 'Se o álbum é público, continua acessível, apenas ocultado da visualização e <b>pode ser mostrado pressionando <hkb>H</hkb></b>.',
			'SETTINGS_SUCCESS_NSFW_VISIBLE' => 'Sensibilidade predefinida do álbum visível atualizada com sucesso.',

			'VIEW_NO_RESULT' => 'Sem resultados',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Sem álbums públicos',
			'VIEW_NO_CONFIGURATION' => 'Sem configuração',
			'VIEW_PHOTO_NOT_FOUND' => 'Fotografia não encontrada',

			'NO_TAGS' => 'Sem Etiquetas',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Pode agora gerir a(s) sua(s) nova(s) fotografia(s).',
			'UPLOAD_COMPLETE' => 'Envio completo',
			'UPLOAD_COMPLETE_FAILED' => 'Falha ao enviar uma ou mais fotografias.',
			'UPLOAD_IMPORTING' => 'A importar',
			'UPLOAD_IMPORTING_URL' => 'A importar URL',
			'UPLOAD_UPLOADING' => 'A enviar',
			'UPLOAD_FINISHED' => 'Acabado',
			'UPLOAD_PROCESSING' => 'A processar',
			'UPLOAD_FAILED' => 'Falhado',
			'UPLOAD_FAILED_ERROR' => 'Envio falhado. O servidor respondeu com um erro!',
			'UPLOAD_FAILED_WARNING' => 'Envio falhado. O servidor respondeu com um aviso!',
			'UPLOAD_CANCELLED' => 'Cancelado',
			'UPLOAD_SKIPPED' => 'Saltado',
			'UPLOAD_UPDATED' => 'Ignorado',
			'UPLOAD_IMPORT_SKIPPED_DUPLICATE' => 'Esta fotografia foi ignorada porque já está na sua livraria.',
			'UPLOAD_IMPORT_RESYNCED_DUPLICATE' => 'Esta fotografia foi ignorada porque já está na sua livraria, mas os seus metadados foram atualizados.',
			'UPLOAD_ERROR_CONSOLE' => 'Por favor dá uma vista de olhos na consola do teu navegador para mais detalhes.',
			'UPLOAD_UNKNOWN' => 'O servidor respondeu com uma mensagem desconhecida. Por favor dá uma vista de olhos na consola do teu navegador para mais detalhes.',
			'UPLOAD_ERROR_UNKNOWN' => 'Envio falhado. O servidor respondeu com um erro desconhecido!',
			'UPLOAD_ERROR_POSTSIZE' => 'Envio falhado. O limite post_max_size do PHP é demasiado pequeno!',
			'UPLOAD_ERROR_FILESIZE' => 'Envio falhado. O limite upload_max_filesize do PHP é demasiado pequeno!',
			'UPLOAD_IN_PROGRESS' => 'O Lychee está a enviar ficheiros de momento!',
			'UPLOAD_IMPORT_WARN_ERR' => 'A importação acabou, mas foi respondida com avisos ou erros. Por favor, dá uma vista de olhos no log (Configurações -> Mostrar Log) para mais detalhes.',
			'UPLOAD_IMPORT_COMPLETE' => 'Importação completa',
			'UPLOAD_IMPORT_INSTR' => 'Por favor insere o link direto da fotografia para a importar:',
			'UPLOAD_IMPORT' => 'Importar',
			'UPLOAD_IMPORT_SERVER' => 'A importar do servidor',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Pasta vazia ou sem ficheiros legíveis para processar. Por favor, dá uma vista de olhos no log (Configurações -> Mostrar Log) para mais detalhes.',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Import all photos, folders and sub-folders located in the folders with the following absolute paths (on server). Paths are space separated, use \\ to escape a space in a path.',
			'UPLOAD_ABSOLUTE_PATH' => 'Absolute path to directories, space separated',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Não foi conseguido iniciar a importação porque a pasta estava vazia!',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Eliminar originais',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'Ficheiros originais vão ser eliminados depois da importação assim que possível.',
			'UPLOAD_IMPORT_VIA_SYMLINK' => 'Links Simbólicos',
			'UPLOAD_IMPORT_VIA_SYMLINK_EXPL' => 'Importar ficheiros utilizando links simbólicos dos links originais.',
			'UPLOAD_IMPORT_SKIP_DUPLICATES' => 'Saltar duplicados',
			'UPLOAD_IMPORT_SKIP_DUPLICATES_EXPL' => 'Ficheiros de multimédia existentes serão ignorados.',
			'UPLOAD_IMPORT_RESYNC_METADATA' => 'Re-sincronizar metadados',
			'UPLOAD_IMPORT_RESYNC_METADATA_EXPL' => 'Atualizar metadados dos ficheiros multimédia existentes.',
			'UPLOAD_IMPORT_LOW_MEMORY' => 'Condição de memória fraca!',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'O processo de importação no servidor está a chegar ao limite de memória e pode acabar por ser terminado de forma permatura.',
			'UPLOAD_WARNING' => 'Aviso',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'O caminho indicado não é um diretório legível!',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'O caminho indicado é um caminho reservado pelo Lychee!',
			'UPLOAD_IMPORT_UNREADABLE' => 'Não foi conseguido ler o ficheiro!',
			'UPLOAD_IMPORT_FAILED' => 'Não foi conseguido importar o ficheiro!',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Tipo de ficheiro não suportado!',
			'UPLOAD_IMPORT_ALBUM_FAILED' => 'Não foi conseguido criar o álbum!',
			'UPLOAD_IMPORT_CANCELLED' => 'Importação cancelada',

			'ABOUT_SUBTITLE' => 'Gestão de fotografias auto-hospedada e bem feita',
			'ABOUT_DESCRIPTION' => '<a target=\'_blank\' href=\'%s\'>Lychee</a> é uma ferramenta gratuita de gestão de fotografias, que corre no teu servidor ou espaço web. A instalação demora segundos. Enviar, gerir e partilhar fotografias como uma aplicação nativa. O Lychee vem com tudo o que precisas e todas as tuas fotografias são guardadas de forma segura.',
			'FOOTER_COPYRIGHT' => 'Todas as imagens neste website estão sujeitas a direitos autorais por %0 &copy; %1',
			'HOSTED_WITH_LYCHEE' => 'Hospedado com Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Copiar para o clipboard',
			'URL_COPIED_TO_CLIPBOARD' => 'URL copiado para o clipboard!',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Links diretos para os ficheiros de imagem:',
			'PHOTO_MEDIUM' => 'Média',
			'PHOTO_MEDIUM_HIDPI' => 'Média HiDPI',
			'PHOTO_SMALL' => 'Pequena',
			'PHOTO_SMALL_HIDPI' => 'Pequena HiDPI',
			'PHOTO_THUMB' => 'Quadrada pequena',
			'PHOTO_THUMB_HIDPI' => 'Quadrada pequena HiDPI',
			'PHOTO_THUMBNAIL' => 'Photo thumbnail',
			'PHOTO_LIVE_VIDEO' => 'Video parte de fotografia ao vivo',
			'PHOTO_VIEW' => 'Vista de Fotografia Lychee:',
			'VIDEO_NOT_SUPPORTED' => 'Your browser does not support the video tag.',

			'PHOTO_EDIT_ROTATECWISE' => 'Rodar no sentido dos ponteiros do relógio',
			'PHOTO_EDIT_ROTATECCWISE' => 'Rodar contra o sentido dos ponteiros do relógio',

			'ERROR_GPX' => 'Error loading GPX file: ',
			'ERROR_EITHER_ALBUMS_OR_PHOTOS' => 'Please select either albums or photos!',
			'ERROR_COULD_NOT_FIND' => 'Could not find what you want.',
			'ERROR_INVALID_EMAIL' => 'Not a valid email address.',
			'EMAIL_SUCCESS' => 'Email updated!',
			'ERROR_PHOTO_NOT_FOUND' => 'Error: photo %s not found !',
			'ERROR_EMPTY_USERNAME' => 'new username cannot be empty.',
			'ERROR_PASSWORD_DOES_NOT_MATCH' => 'new password does not match.',
			'ERROR_EMPTY_PASSWORD' => 'new password cannot be empty.',
			'ERROR_SELECT_ALBUM' => 'Select an album to share!',
			'ERROR_SELECT_USER' => 'Select a user to share with!',
			'ERROR_SELECT_SHARING' => 'Select a sharing to remove!',
			'SHARING_SUCCESS' => 'Sharing updated!',
			'SHARING_REMOVED' => 'Sharing removed!',
			'USER_CREATED' => 'User created!',
			'USER_REMOVED' => 'User deleted!',
			'USER_UPDATED' => 'User updated!',
			'ENTER_EMAIL' => 'Enter your email address:',
			'ERROR_ALBUM_JSON_NOT_FOUND' => 'Error: Album json not found!',
			'ERROR_ALBUM_NOT_FOUND' => 'Error: album %s not found',
			'ERROR_DROPBOX_KEY' => 'Error: Dropbox key not set',
			'ERROR_SESSION' => 'Session expired.',
			'CAMERA_DATE' => 'Camera date',
			'NEW_PASSWORD' => 'new password',
			'ALLOW_UPLOADS' => 'Allow uploads',
			'RESTRICTED_ACCOUNT' => 'Restricted account',
			'OSM_CONTRIBUTORS' => 'OpenStreetMap contributors',
		];

		return $locale;
	}
}
