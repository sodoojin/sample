import articleApi from '../api/article';

export default {
    destroy(id, href) {
        if (confirm('정말 삭제하시겠습니까?')) {
            articleApi.destroy(id);

            if (href != '') {
                document.location.href = href;
            } else {
                document.location.reload();
            }
        }
    }
};